<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Flower;
use App\Models\Bouquet;
use Illuminate\Support\Facades\DB;

class OrderControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['client', 'items.itemable'])->get();

        return response()->json([
            'success' => true,
            'data' => $orders
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(Request $request)
//    {
//        $validated = $request->validate([
//            'type' => 'required|in:order,sale',
//            'client_id' => 'nullable|exists:clients,id',
//            'client_name' => 'nullable|string|max:255',
//            'client_phone' => 'nullable|string|max:20',
//            'delivery_date' => 'nullable|date',
//            'delivery_time' => 'nullable|date_format:H:i',
//            'payment_method' => 'nullable|in:cash,card,qr',
//            'comment' => 'nullable|string',
//            'items' => 'required|array|min:1',
//            'items.*.type' => 'required|in:flower,bouquet',
//            'items.*.id' => 'required|integer',
//            'items.*.quantity' => 'required|integer|min:1'
//        ]);
//
//        DB::beginTransaction();
//
//        try {
//            $status = $validated['type'] === 'sale' ? 'completed' : 'new';
//
//            $order = Order::create([
//                'type' => $validated['type'],
//                'client_id' => $validated['client_id'] ?? null,
//                'client_name' => $validated['client_name'] ?? null,
//                'client_phone' => $validated['client_phone'] ?? null,
//                'delivery_date' => $validated['delivery_date'] ?? null,
//                'delivery_time' => $validated['delivery_time'] ?? null,
//                'status' => $status,
//                'total_amount' => 0,
//                'payment_method' => $validated['payment_method'] ?? null,
//                'comment' => $validated['comment'] ?? null
//            ]);
//
//            if ($order->delivery_date) {
//                $order->calculateAssemblyDate();
//            }
//
//            $total = 0;
//
//            foreach ($validated['items'] as $item) {
//                if ($item['type'] === 'flower') {
//                    $product = Flower::findOrFail($item['id']);
//                    $type = Flower::class;
//                } else {
//                    $product = Bouquet::findOrFail($item['id']);
//                    $type = Bouquet::class;
//                }
//
//                $price = $product->price;
//                $subtotal = $item['quantity'] * $price;
//                $total += $subtotal;
//
//                OrderItem::create([
//                    'order_id' => $order->id,
//                    'itemable_id' => $item['id'],
//                    'itemable_type' => $type,
//                    'quantity' => $item['quantity'],
//                    'price' => $price
//                ]);
//
//                if ($order->type === 'sale') {
//                    $product->decreaseQuantity($item['quantity']);
//                }
//            }
//
//            $order->update(['total_amount' => $total]);
//
//            DB::commit();
//
//            return response()->json([
//                'success' => true,
//                'message' => $order->type === 'order' ? 'Order created successfully' : 'Sale created successfully',
//                'data' => $order->load(['client', 'items.itemable'])
//            ], 201);
//
//        } catch (\Exception $e) {
//            DB::rollBack();
//            return response()->json([
//                'success' => false,
//                'message' => 'Failed to create order',
//                'error' => $e->getMessage()
//            ], 500);
//        }
//    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:order,sale',
            'client_id' => 'nullable|exists:clients,id',
            'client_name' => 'nullable|string|max:255',
            'client_phone' => 'nullable|string|max:20',
            'delivery_date' => 'nullable|date',
            'delivery_time' => 'nullable|date_format:H:i',
            'assembly_date' => 'nullable|date',  // добавить валидацию для assembly_date
            'payment_method' => 'nullable|in:cash,card,qr',
            'comment' => 'nullable|string',
            'items' => 'required|array|min:1',
            'items.*.type' => 'required|in:flower,bouquet',
            'items.*.id' => 'required|integer',
            'items.*.quantity' => 'required|integer|min:1'
        ]);

        DB::beginTransaction();

        try {
            $status = $validated['type'] === 'sale' ? 'completed' : 'new';

            $order = Order::create([
                'type' => $validated['type'],
                'client_id' => $validated['client_id'] ?? null,
                'client_name' => $validated['client_name'] ?? null,
                'client_phone' => $validated['client_phone'] ?? null,
                'delivery_date' => $validated['delivery_date'] ?? null,
                'delivery_time' => $validated['delivery_time'] ?? null,
                'assembly_date' => $validated['assembly_date'] ?? null, // пользователь вводит сам
                'status' => $status,
                'total_amount' => 0,
                'payment_method' => $validated['payment_method'] ?? null,
                'comment' => $validated['comment'] ?? null,
                'user_id' => auth()->id(),
            ]);

            // Убрали вызов calculateAssemblyDate()

            $total = 0;

            foreach ($validated['items'] as $item) {
                if ($item['type'] === 'flower') {
                    $product = Flower::findOrFail($item['id']);
                    $type = Flower::class;
                } else {
                    $product = Bouquet::findOrFail($item['id']);
                    $type = Bouquet::class;
                }

                $price = $product->price;
                $subtotal = $item['quantity'] * $price;
                $total += $subtotal;

                OrderItem::create([
                    'order_id' => $order->id,
                    'itemable_id' => $item['id'],
                    'itemable_type' => $type,
                    'quantity' => $item['quantity'],
                    'price' => $price
                ]);

                if ($order->type === 'sale') {
                    $product->decreaseQuantity($item['quantity']);
                }
            }

            $order->update(['total_amount' => $total]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Order created successfully',
                'data' => $order
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Failed to create order',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with(['client', 'items.itemable'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

        $validated = $request->validate([
            'status' => 'sometimes|in:new,assembly,ready,completed,cancelled',
            'delivery_date' => 'nullable|date',
            'delivery_time' => 'nullable|date_format:H:i',
            'assembly_date' => 'nullable|date',  // добавить возможность обновлять
            'payment_method' => 'nullable|in:cash,card,qr',
            'comment' => 'nullable|string'
        ]);

        // Убрали весь код с calculateAssemblyDate()
        $order->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Order updated successfully',
            'data' => $order
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json([
            'success' => true,
            'message' => 'Order deleted successfully'
        ]);
    }
}
