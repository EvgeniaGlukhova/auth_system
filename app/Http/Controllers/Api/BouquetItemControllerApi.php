<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BouquetItem;
use App\Models\Bouquet;
use App\Models\Flower;

class BouquetItemControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bouquetItems = BouquetItem::with(['bouquet', 'flower'])->get();

        return response()->json([
            'success' => true,
            'data' => $bouquetItems
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bouquet_id' => 'required|exists:bouquets,id',
            'flower_id' => 'required|exists:flowers,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $bouquetItem = BouquetItem::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Flower added to bouquet successfully',
            'data' => $bouquetItem
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bouquetItem = BouquetItem::findOrFail($id);

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $bouquetItem->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Quantity updated successfully',
            'data' => $bouquetItem
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bouquetItem = BouquetItem::findOrFail($id);
        $bouquetItem->delete();

        return response()->json([
            'success' => true,
            'message' => 'Flower removed from bouquet successfully'
        ]);
    }
}
