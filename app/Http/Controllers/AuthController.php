<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data =$request->validate([
            'full_name' => 'required',
            'contact' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ],['contact.unique' => 'This number have already registered']);

        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $this->createProfile($user->id);
        $user->load('profiles');
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }

    function createProfile($userId, $type='own' , $companyId=null){
        $isActive = false;
        if($type=='own'){
            $isActive = true;
        }

        Profile::create([
            'type' => $type,
            'is_active' => $isActive,
            'user_id' => $userId,
            'company_id' => $companyId,
        ]);
    }



    public function login(Request $request)
    {
        $credentials = $request->only('contact', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->profiles;
            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'user' => Auth::user(),
                'token' => $token,
            ]);
        }

        return response()->json(['message' => 'Credentials do not match with our records'], 401);
    }
    public function logout()
{
    Auth::user()->tokens->each(function ($token, $key) {
        $token->delete();
    });

    return response()->json(['message' => 'Logged out successfully'],Response::HTTP_OK);
}
}
