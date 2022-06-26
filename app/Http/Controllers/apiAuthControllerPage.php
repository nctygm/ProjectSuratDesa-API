<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class apiAuthControllerPage extends Controller
{
    public function register (request $request) {
        //valdiate
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //create new user in users table
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response()->json($response, 200);
    }
        
    public function login(request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required|string',
        ];
        $request->validate($rules);
        //cari email dari tabel user di database
        $user = User::where('email', $request->email)->first();
        // jika email ditemukan dan passwordnya correct atau sesuai
        if($user && Hash::check($request->password, $user->password)){
            $token = $user->createToken('Personal Acces Token')->plainTextToken;
            $response=['user'=>$user, 'token'=>$token];
            return response()->json($response, 200);
        }
        $response = ['message'=>'Password atau email salah'];
        return response()->json($response, 400);
    }
    
    
}
