<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register (Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'age' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($data);
        return redirect()->route('login');

    }

    public function login (Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        return redirect()->route('dashboard');
    }

    public function dashboardPage(){
        return view('dashboard');
    }
}
