<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'password|confirmed'
        ]);

        User::create($validate);
        return redirect()->route('login')->with('status','Registration Successfully');

    }

    public function login(Request $request){
        $credential = $request->validate([
            'email'=>'required|email',
            'password'=>'password'
        ]);

        if(Auth::attempt($credential)){
            return redirect()->route('dashboard')->with('status','Login Successfully');
        }
    }

    public function dashBoard(){
        return view('dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('status','User Logout Successfully');
    }
}
