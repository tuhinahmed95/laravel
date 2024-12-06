<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'role'=>'required',
            'age'=>'required',
            'password'=>'required|confirmed'
        ]);

        $user = User::create($data);
        if($user){
            return redirect()->route('login');
        }
    }

    public function login(Request $request){
        $credintial = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($credintial)){
            return redirect()->route('dashboard');
        }
    }
}
