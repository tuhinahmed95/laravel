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
            'password'=>'required|confirmed'
        ]);

        $createdata = User::create($validate);
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

    public function dashboard(){
        return view('auth.dashboard');
    }

    public function inner(){
        return view('auth.inner');
    }

    // public function logout(){

    // }
}
