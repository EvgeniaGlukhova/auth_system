<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bouquet;
use App\Models\Movement;
use Illuminate\Http\Request;

class BouquetControllerApi extends Controller
{

    public function index()
    {
        $bouquets = Bouquet::all();
        return response()->json([
            'success' => true,
            'data' => $bouquets
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'production_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after:production_date'
        ]);

        $bouquet = Bouquet::create($validated);

        // Записываем движение при создании
        if ($bouquet->quantity > 0) {
            Movement::create([
                'movable_id' => $bouquet->id,
                'movable_type' => Bouquet::class,
                'type' => 'incoming',
                'quantity' => $bouquet->quantity,
                'quantity_before' => 0,
                'quantity_after' => $bouquet->quantity,
                'reason' => 'Первоначальное создание букета',
                'user_id' => auth()->id()
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Bouquet created successfully',
            'data' => $bouquet->load(['flowers', 'movements'])
        ], 201);
    }


    public function show(string $id)
    {
        $bouquet = Bouquet::with(['flowers', 'movements.user'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $bouquet
        ]);
    }


    public function update(Request $request, string $id)
    {
        $bouquet = Bouquet::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0',
            'description' => 'nullable|string',
            'production_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after:production_date'
            // quantity НЕ МЕНЯЕМ здесь! Для количества есть отдельные методы
        ]);

        $bouquet->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Bouquet updated successfully',
            'data' => $bouquet->load(['flowers', 'movements'])
        ]);
    }


    public function destroy(string $id)
    {
        $bouquet = Bouquet::findOrFail($id);

        // Можно записать движение на удаление (списание)
        if ($bouquet->quantity > 0) {
            Movement::create([
                'movable_id' => $bouquet->id,
                'movable_type' => Bouquet::class,
                'type' => 'loss',
                'quantity' => $bouquet->quantity,
                'quantity_before' => $bouquet->quantity,
                'quantity_after' => 0,
                'reason' => 'Удаление букета из системы',
                'user_id' => auth()->id()
            ]);
        }

        $bouquet->delete();

        return response()->json([
            'success' => true,
            'message' => 'Bouquet deleted successfully'
        ]);
    }

    /**
     * Приход букетов (поставка/сборка)
     */
    public function incoming(Request $request, string $id)
    {
        $bouquet = Bouquet::findOrFail($id);

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'reason' => 'required|string'
        ]);

        $oldQuantity = $bouquet->quantity;
        $bouquet->quantity += $validated['quantity'];
        $bouquet->save();

        Movement::create([
            'movable_id' => $bouquet->id,
            'movable_type' => Bouquet::class,
            'type' => 'incoming',
            'quantity' => $validated['quantity'],
            'quantity_before' => $oldQuantity,
            'quantity_after' => $bouquet->quantity,
            'reason' => $validated['reason'],
            'user_id' => auth()->id()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Поставка букетов добавлена',
            'data' => $bouquet->load(['flowers', 'movements'])
        ]);
    }

    /**
     * Расход букетов (продажа, списание, потеря)
     */
    public function outgoing(Request $request, string $id)
    {
        try {
            $bouquet = Bouquet::find($id);
            if (!$bouquet) {
                return response()->json(['error' => 'Букет не найден'], 404);
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

            if ($bouquet->quantity < $quantity) {
                return response()->json([
                    'success' => false,
                    'message' => "Недостаточно букетов. В наличии: {$bouquet->quantity}"
                ], 400);
            }

            $oldQuantity = $bouquet->quantity;
            $bouquet->quantity = $bouquet->quantity - $quantity;
            $bouquet->save();

            $movement = Movement::create([
                'movable_id' => $bouquet->id,
                'movable_type' => Bouquet::class,
                'type' => $type,
                'quantity' => $quantity,
                'quantity_before' => $oldQuantity,
                'quantity_after' => $bouquet->quantity,
                'reason' => $reason,
                'user_id' => auth()->id() ?? 1
            ]);

            return response()->json([
                'success' => true,
                'message' => $type === 'loss' ? 'Списание букетов выполнено' : 'Продажа букетов оформлена',
                'old_quantity' => $oldQuantity,
                'new_quantity' => $bouquet->quantity,
                'data' => $bouquet->load(['flowers', 'movements']),
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
