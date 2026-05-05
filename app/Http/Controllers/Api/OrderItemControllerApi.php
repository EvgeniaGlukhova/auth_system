<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Flower;
use App\Models\Bouquet;
use Illuminate\Support\Facades\DB;

class OrderItemControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderItems = OrderItem::all();

        return response()->json([
            'success' => true,
            'data' => $orderItems
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'itemable_id' => 'required|integer',
            'itemable_type' => 'required|in:App\Models\Flower,App\Models\Bouquet',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0'
        ]);

        $orderItem = OrderItem::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Order item created successfully',
            'data' => $orderItem->load(['order', 'itemable'])
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orderItem = OrderItem::with(['order', 'itemable'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $orderItem
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $orderItem = OrderItem::findOrFail($id);

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'price' => 'sometimes|numeric|min:0'
        ]);

        $orderItem->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Order item updated successfully',
            'data' => $orderItem->load(['order', 'itemable'])
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->delete();

        return response()->json([
            'success' => true,
            'message' => 'Order item deleted successfully'
        ]);
    }
}
