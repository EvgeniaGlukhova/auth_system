<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthControllerApi extends Controller
{
    // Вход в систему (получение токена)
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->with('role')->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Неверный email или пароль.'],
            ]);
        }

        // Удаляем старые токены (опционально)
        // $user->tokens()->delete();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'user' => [
                'id' => $user->id,
                'full_name' => $user->full_name,
                'email' => $user->email,
                'role' => $user->role->name,
            ],
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    // Получить данные текущего пользователя
    public function me(Request $request)
    {
        $user = $request->user()->load('role');

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $user->id,
                'surname' => $user->surname,
                'name' => $user->name,
                'patronymic' => $user->patronymic,
                'email' => $user->email,
                'phone' => $user->phone,
                'role' => $user->role->name,
            ]
        ]);
    }

    // Выход из системы
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Вы вышли из системы.'
        ]);
    }
}
