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
        $creadintial = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($creadintial)){
            return redirect()->route('dashboard');
        }
    }

    public function dashboardPage(){
        return view('dashboard');
    }

    public function inner (){
        return view('inner');
    }

    public function logout(){
        Auth::logout();
        return view('login');
    }
}