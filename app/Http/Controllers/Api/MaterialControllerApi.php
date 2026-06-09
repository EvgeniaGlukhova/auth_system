<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Movement;
use Illuminate\Http\Request;

class MaterialControllerApi extends Controller
{
    public function index()
    {
        $materials = Material::with('supplier')->get();

        return response()->json([
            'success' => true,
            'data' => $materials
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'expiry_date' => 'nullable|date'
        ]);

        $material = Material::create($validated);


        if ($material->quantity > 0) {
            Movement::create([
                'movable_id' => $material->id,
                'movable_type' => Material::class,
                'type' => 'incoming',
                'quantity' => $material->quantity,
                'quantity_before' => 0,
                'quantity_after' => $material->quantity,
                'reason' => 'Первоначальное поступление',
                'user_id' => auth()->id()
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Material created successfully',
            'data' => $material->load('supplier')
        ], 201);
    }

    public function show(string $id)
    {
        $material = Material::with(['supplier', 'movements.user'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $material
        ]);
    }

    public function update(Request $request, string $id)
    {
        $material = Material::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'type' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'expiry_date' => 'nullable|date'

        ]);

        $material->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Material updated successfully',
            'data' => $material->load('supplier')
        ]);
    }

    public function destroy(string $id)
    {
        $material = Material::findOrFail($id);


        if ($material->quantity > 0) {
            Movement::create([
                'movable_id' => $material->id,
                'movable_type' => Material::class,
                'type' => 'loss',
                'quantity' => $material->quantity,
                'quantity_before' => $material->quantity,
                'quantity_after' => 0,
                'reason' => 'Удаление материала из системы',
                'user_id' => auth()->id()
            ]);
        }

        $material->delete();

        return response()->json([
            'success' => true,
            'message' => 'Material deleted successfully'
        ]);
    }

    public function incoming(Request $request, string $id)
    {
        $material = Material::findOrFail($id);

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'reason' => 'required|string'
        ]);

        $oldQuantity = $material->quantity;
        $material->quantity += $validated['quantity'];
        $material->save();

        Movement::create([
            'movable_id' => $material->id,
            'movable_type' => Material::class,
            'type' => 'incoming',
            'quantity' => $validated['quantity'],
            'quantity_before' => $oldQuantity,
            'quantity_after' => $material->quantity,
            'reason' => $validated['reason'],
            'user_id' => auth()->id()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Поставка материала добавлена',
            'data' => $material->load('supplier')
        ]);
    }

    public function outgoing(Request $request, string $id)
    {
        try {
            $material = Material::find($id);
            if (!$material) {
                return response()->json(['error' => 'Материал не найден'], 404);
            }

            $quantity = $request->input('quantity');
            $reason = $request->input('reason', 'Списание');
            $type = $request->input('type', 'outgoing');

            if (!$quantity) {
                return response()->json([
                    'success' => false,
                    'message' => 'Не указано количество для списания'
                ], 400);
            }

            if ($material->quantity < $quantity) {
                return response()->json([
                    'success' => false,
                    'message' => "Недостаточно материала. В наличии: {$material->quantity}"
                ], 400);
            }

            $oldQuantity = $material->quantity;
            $material->quantity = $material->quantity - $quantity;
            $material->save();

            $movement = Movement::create([
                'movable_id' => $material->id,
                'movable_type' => Material::class,
                'type' => $type,
                'quantity' => $quantity,
                'quantity_before' => $oldQuantity,
                'quantity_after' => $material->quantity,
                'reason' => $reason,
                'user_id' => auth()->id() ?? 1
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Списание материала выполнено',
                'old_quantity' => $oldQuantity,
                'new_quantity' => $material->quantity,
                'data' => $material->load('supplier'),
                'movement' => $movement
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ], 500);
        }
    }
}
