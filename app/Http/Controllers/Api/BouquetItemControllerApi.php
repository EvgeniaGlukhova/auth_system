<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BouquetItem;
use App\Models\Bouquet;
use App\Models\Flower;
use App\Models\Material;

class BouquetItemControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bouquetItems = BouquetItem::with(['bouquet', 'itemable', 'user'])->get();

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
            'itemable_id' => 'required|integer',
            'itemable_type' => 'required|in:flower,material',
            'quantity' => 'required|integer|min:1'
        ]);

        // Преобразуем тип в полное имя класса
        $typeClass = $validated['itemable_type'] === 'flower'
            ? Flower::class
            : Material::class;

        // Проверяем, существует ли такой компонент
        if ($typeClass === Flower::class) {
            Flower::findOrFail($validated['itemable_id']);
        } else {
            Material::findOrFail($validated['itemable_id']);
        }

        $bouquetItem = BouquetItem::create([
            'bouquet_id' => $validated['bouquet_id'],
            'itemable_id' => $validated['itemable_id'],
            'itemable_type' => $typeClass,
            'user_id' => auth()->id(),
            'quantity' => $validated['quantity']
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Component added to bouquet successfully',
            'data' => $bouquetItem->load(['bouquet', 'itemable', 'user'])
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bouquetItem = BouquetItem::with(['bouquet', 'itemable', 'user'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $bouquetItem
        ]);
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
            'data' => $bouquetItem->load(['bouquet', 'itemable', 'user'])
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
            'message' => 'Component removed from bouquet successfully'
        ]);
    }

    /**
     * Get all components for a specific bouquet
     */
    public function getByBouquet($bouquetId)
    {
        $bouquet = Bouquet::findOrFail($bouquetId);

        $components = BouquetItem::with(['itemable', 'user'])
            ->where('bouquet_id', $bouquetId)
            ->get();

        return response()->json([
            'success' => true,
            'bouquet' => $bouquet->name,
            'data' => $components
        ]);
    }
}
