<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\Movement;

class FlowerControllerApi extends Controller
{

    public function index()
    {

        $flowers = Flower::with('supplier')->get();  // ← добавить with('supplier')
        return response()->json($flowers);

    }


    public function store(Request $request)
    {
        \Log::info('Метод store вызван', ['data' => $request->all()]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'received_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after:received_date'
        ]);

        $flower = Flower::create($validated);

        if ($flower->quantity > 0) {
            Movement::create([
                'flower_id' => $flower->id,
                'type' => 'incoming',
                'quantity' => $flower->quantity,
                'quantity_before' => 0,
                'quantity_after' => $flower->quantity,
                'reason' => 'Первоначальное поступление',
                'user_id' => auth()->id()
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Flower created successfully',
            'data' => $flower->load('supplier')
        ], 201);
    }


    public function show(string $id)
    {
        $flower = Flower::with('supplier')->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $flower
        ]);
    }


    public function update(Request $request, string $id)
    {
        $flower = Flower::findOrFail($id);

        // Сохраняем старое количество
        $oldQuantity = $flower->quantity;

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0',
            'quantity' => 'sometimes|required|integer|min:0',  // ← ДОБАВИТЬ QUANTITY
            'supplier_id' => 'nullable|exists:suppliers,id',
            'received_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after:received_date'
        ]);

        $flower->update($validated);

        // Если количество изменилось - записываем движение
        if (isset($validated['quantity']) && $validated['quantity'] != $oldQuantity) {
            $diff = $validated['quantity'] - $oldQuantity;
            $type = $diff > 0 ? 'incoming' : 'outgoing';

            Movement::create([
                'flower_id' => $flower->id,
                'type' => $type,
                'quantity' => abs($diff),
                'quantity_before' => $oldQuantity,
                'quantity_after' => $validated['quantity'],
                'reason' => $request->reason ?? ($diff > 0 ? 'Поставка' : 'Расход'),
                'user_id' => auth()->id()
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Flower updated successfully',
            'data' => $flower->load('supplier')
        ]);
    }

    // Отдельный метод для поставки
    public function incoming(Request $request, string $id)
    {
        $flower = Flower::findOrFail($id);

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'reason' => 'required|string',
            'user_id' => 'nullable|exists:users,id'
        ]);

        $oldQuantity = $flower->quantity;
        $flower->quantity += $validated['quantity'];
        $flower->save();

        Movement::create([
            'movable_id' => $flower->id,
            'movable_type' => Flower::class,  // или 'App\Models\Flower'
            'type' => 'incoming',
            'quantity' => $validated['quantity'],
            'quantity_before' => $oldQuantity,
            'quantity_after' => $flower->quantity,
            'reason' => $validated['reason'],
            'user_id' => auth()->id()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Поставка добавлена',
            'data' => $flower
        ]);
    }

// Отдельный метод для списания

    public function outgoing(Request $request, string $id)
    {
        try {
            $flower = Flower::find($id);
            if (!$flower) {
                return response()->json(['error' => 'Цветок не найден'], 404);
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

            if ($flower->quantity < $quantity) {
                return response()->json([
                    'success' => false,
                    'message' => "Недостаточно цветов. В наличии: {$flower->quantity}"
                ], 400);
            }

            $oldQuantity = $flower->quantity;

            $flower->quantity = $flower->quantity - $quantity;
            $flower->save();

            $movement = Movement::create([
                'movable_id' => $flower->id,
                'movable_type' => Flower::class,  // или 'App\Models\Flower'
                'type' => $type,
                'quantity' => $quantity,
                'quantity_before' => $oldQuantity,
                'quantity_after' => $flower->quantity,
                'reason' => $reason,
                'user_id' => auth()->id() ?? 1
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Списание выполнено',
                'old_quantity' => $oldQuantity,
                'new_quantity' => $flower->quantity,
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





    public function destroy(string $id)
    {
        $flower = Flower::findOrFail($id);
        $flower->delete();

        return response()->json([
            'success' => true,
            'message' => 'Flower deleted successfully'
        ]);
    }
}
