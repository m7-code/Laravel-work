<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $validateUser = validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        if ($validateUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateUser->errors()->all()
            ], 401);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json([
            'status' => true,
            'message' => 'User Created Successfully',
            'user' => $user
        ], 201);
    }
    public function login(Request $request)
    {
        $validateUser = validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ]);
        if ($validateUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateUser->errors()->all()
            ], 401);
        }

        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $authUser = Auth::user();
            
            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $authUser->createToken("API Token")->plainTextToken,
                'token_type' => 'Bearer'
                
            ], 200);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'Email and Password does not match with our record.',
            ], 401);
        }
    }
    public function logout(Request $request)
    {
       $user = $request->user();
       $user->tokens()->delete();
       return response()->json([
        'status' => true,
        
        'message' => 'Logged Out Successfully',
       ], 200);
    }
}
