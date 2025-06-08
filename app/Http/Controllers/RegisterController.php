<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $userData = $request->all();
        $userData['password'] = Hash::make($userData['password']);

        $user = User::create($userData);
        $token = $user->createToken('auth_token')->plainTextToken;

        $message = [
            'user' => $user,
            'token' => $token
        ];
        
        return response()->json(['message' => $message], 201);
    }
}
