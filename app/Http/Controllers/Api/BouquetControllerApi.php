<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bouquet;
use Illuminate\Http\Request;

class BouquetControllerApi extends Controller
{

    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Bouquet::all()
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

        return response()->json([
            'success' => true,
            'message' => 'Bouquet created successfully',
            'data' => $bouquet
        ], 201);
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        $bouquet = Bouquet::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric|min:0',
            'description' => 'nullable|string',
            'quantity' => 'sometimes|required|integer|min:0',
            'production_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after:production_date'
        ]);

        $bouquet->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Bouquet updated successfully',
            'data' => $bouquet
        ]);
    }


    public function destroy(string $id)
    {
        $bouquet = Bouquet::findOrFail($id);
        $bouquet->delete();

        return response()->json([
            'success' => true,
            'message' => 'Bouquet deleted successfully'
        ]);
    }
}
