<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ApiController extends Controller
{
    public function login(Request $request){
        $user = User::where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'invalid credentials']);
        }

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json(['token' => $token]);

    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'string|max: 255|required',
            'email' => 'string|max: 255|required',
            'password' => 'string|max: 255|required'
        ]);

        $validated ['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'message' => 'account made',
            "token" => $token]);
    }

    public function index(){
        return [
            'total users'=>User::count(),
            'users'=>User::all(),
        ];
    }


}
