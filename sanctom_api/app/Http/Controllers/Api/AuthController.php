<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(Request $request){
        $validateUser = Validator(
            $request->all(),
            [
                'name'=>['required'],
                'email'=>['required|email|unique:users,email'],
                'password'=>['required'],
            ]
            );

            if($validateUser->fails()){
                return response()->json([
                    'status'=>false,
                    'message'=>'Validation Error',
                    'errors'=>$validateUser->errors()->all()
                ],401);
            }

            $users = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
            ]);
    }

    public function login(Request $request){

    }

    public function logout(Request $request){

    }
}
