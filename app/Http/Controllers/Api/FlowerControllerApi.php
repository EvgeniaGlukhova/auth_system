<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\FlowerMovement;

class FlowerControllerApi extends Controller
{

    public function index()
    {
        $flowers = Flower::with('supplier')->get();  // ← добавить with('supplier')
        return response()->json($flowers);

    }


    public function store(Request $request)
    {
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
            FlowerMovement::create([
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

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0'
        ]);

        $flower->update($validated);

        $flower = Flower::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'received_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after:received_date'
        ]);

        $flower->update($validated);

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
            'reason' => 'required|string'
        ]);

        $oldQuantity = $flower->quantity;
        $flower->quantity += $validated['quantity'];
        $flower->save();

        FlowerMovement::create([
            'flower_id' => $flower->id,
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
        $flower = Flower::findOrFail($id);

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'reason' => 'required|string',
            'type' => 'required|in:outgoing,loss'
        ]);

        if ($flower->quantity < $validated['quantity']) {
            return response()->json([
                'success' => false,
                'message' => 'Недостаточно цветов'
            ], 400);
        }

        $oldQuantity = $flower->quantity;
        $flower->quantity -= $validated['quantity'];
        $flower->save();

        FlowerMovement::create([
            'flower_id' => $flower->id,
            'type' => $validated['type'],
            'quantity' => $validated['quantity'],
            'quantity_before' => $oldQuantity,
            'quantity_after' => $flower->quantity,
            'reason' => $validated['reason'],
            'user_id' => auth()->id()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Списание выполнено',
            'data' => $flower
        ]);
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
