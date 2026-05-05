<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();

        return response()->json([
            'success' => true,
            'data' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Проверяем права
        if (!auth()->user()->isAdministrator()) {
            return response()->json([
                'success' => false,
                'message' => 'У вас нет прав для добавления сотрудников'
            ], 403);
        }


        $validated = $request->validate([
            'role_id' => 'required|exists:roles,id',
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'patronymic' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'password' => 'required|string|min:6'
        ]);

        $user = User::create([
            'role_id' => $validated['role_id'],
            'surname' => $validated['surname'],
            'name' => $validated['name'],
            'patronymic' => $validated['patronymic'] ?? null,
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'password' => Hash::make($validated['password'])
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user->load('role')
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!auth()->user()->isAdministrator()) {
            return response()->json([
                'success' => false,
                'message' => 'У вас нет прав для редактирования сотрудников'
            ], 403);
        }

        $user = User::findOrFail($id);

        $validated = $request->validate([
            'role_id' => 'sometimes|required|exists:roles,id',
            'surname' => 'sometimes|required|string|max:255',
            'name' => 'sometimes|required|string|max:255',
            'patronymic' => 'nullable|string|max:255',
            'email' => 'sometimes|required|email|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'password' => 'sometimes|required|string|min:6'
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'User updated successfully',
            'data' => $user->load('role')
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
                'message' => 'У вас нет прав для удаления сотрудников'
            ], 403);
        }

        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully'
        ]);
    }
}
