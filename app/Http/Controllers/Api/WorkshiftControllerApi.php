<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Workshift;

class WorkshiftControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workshifts = Workshift::with('user')->get();

        return response()->json([
            'success' => true,
            'data' => $workshifts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'closed' => 'boolean'
        ]);

        $workshift = Workshift::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Workshift created successfully',
            'data' => $workshift
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $workshift = Workshift::with('user')->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $workshift
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $workshift = Workshift::findOrFail($id);

        $validated = $request->validate([
            'user_id' => 'sometimes|required|exists:users,id',
            'date' => 'sometimes|required|date',
            'start_time' => 'sometimes|required|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'closed' => 'boolean'
        ]);

        $workshift->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Workshift updated successfully',
            'data' => $workshift
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!auth()->user()->isAdministrator()) {
            return response()->json([
                'success' => false,
                'message' => 'У вас нет прав'
            ], 403);
        }

        $workshift = Workshift::findOrFail($id);
        $workshift->delete();

        return response()->json([
            'success' => true,
            'message' => 'Workshift deleted successfully'
        ]);
    }
}
