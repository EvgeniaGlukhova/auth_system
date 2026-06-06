<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::with('supplier')->get();

        return response()->json([
            'success' => true,
            'data' => $materials
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return response()->json([
            'success' => true,
            'message' => 'Material created successfully',
            'data' => $material->load('supplier')
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $material = Material::with('supplier')->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $material
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $material = Material::findOrFail($id);
        $material->delete();

        return response()->json([
            'success' => true,
            'message' => 'Material deleted successfully'
        ]);
    }

    /**
     * Приход материала (incoming)
     */
    public function incoming(Request $request, string $id)
    {
        $material = Material::findOrFail($id);

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'reason' => 'required|string'
        ]);

        $material->quantity += $validated['quantity'];
        $material->save();

        return response()->json([
            'success' => true,
            'message' => 'Поставка материала добавлена',
            'data' => $material
        ]);
    }

    /**
     * Расход материала (outgoing)
     */
    public function outgoing(Request $request, string $id)
    {
        $material = Material::findOrFail($id);

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
            'reason' => 'required|string'
        ]);

        if ($material->quantity < $validated['quantity']) {
            return response()->json([
                'success' => false,
                'message' => 'Недостаточно материала'
            ], 400);
        }

        $material->quantity -= $validated['quantity'];
        $material->save();

        return response()->json([
            'success' => true,
            'message' => 'Списание материала выполнено',
            'data' => $material
        ]);
    }
}
