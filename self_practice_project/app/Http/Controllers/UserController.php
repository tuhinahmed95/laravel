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
            'email'=>'required',
            'password'=>'required|confirmed',
        ]);

        User::create($validate);
        return redirect()->route('login');
    }

    public function login(Request $request){
        $creadential = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($creadential)){
            return redirect()->route('dashboard');
        }
    }

    public function dashBoard(){
        return view('auth.dashboard');
    }

    public function innerPage(){
        return view('auth.inner');
    }

    public function logout(){

    }
}
