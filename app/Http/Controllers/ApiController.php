<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ApiController extends Controller
{   
    //login
    public function login(Request $request){
        //gets the first email in db
        $user = User::where('email',$request->email)->first();

        //check email and password
        if(!$user||!Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'invalid credentials'],401);
        }else{
            //assign token
            $token = $user->createToken('api-token')->plainTextToken;
            return response()->json([
                'message' => 'logged in',
                'token' => $token]);
        }
        
        return 0;

    }

    //register
    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'string|max: 255|required',
            'email' => 'string|max: 255|required',
            'password' => 'string|max: 255|required'
        ]);

        $validated ['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json(['message' => 'account made']);
    }
   
    
    //get users count and all users
    public function index(){
        return [
            'total users'=>User::count(),
            'users'=>User::all(),
        ];
    }

    //show specf user
    public function show(Request $request,$id){
        $user = User::find($id);

        if($user){
            return response()->json(['user' => $user]);
        }else{
            return response()->json(['error' => 'invalid user']);
        }
    }

    //edit user 
    public function update(Request $request,$id){
        $user = User::find($id);

        $data = $request->validate([
            'name' => 'string|max: 255|required',
            'email' => 'string|max: 255|required',
            'password' => 'string|max: 255|required'
        ]);

        $data['password'] = Hash::make($data['password']);


        if($user){
            $user->update($data);
            return response()->json(['message'=>'user updated']);
        }else{
            return response()->json(['message'=>'invalid user or credentials']);
        }
        
        return 0;
    }


}
