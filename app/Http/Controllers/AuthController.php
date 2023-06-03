<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string|unique:users,name',
            'password' => 'required|string'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('sdfvvgrbrsdb')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
        }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string|unique:users,name'
        ]);

        $user = User::where('name', $fields['name'])->first();
        if(!$user || !Hash::check($fields['name'], $user->password)){
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('sdfvvgrbrsdb')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

        public function logout (Request $request){
        auth()->user()->tokens()->delete();
        return[
            'message'=> 'Logged out'
        ];
        }
}
