<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
        ]);

        return redirect()->route('login')->with('status', 'Registration Successfully');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            return redirect()->route('dashboard')->with('status', 'Login Successfully');
        }

        return back()->withErrors(['email' => 'Invalid credentials. Please try again.'])->withInput();
    }


    public function dashBoard()
    {
        return view('dashboard');
    }

   
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('status', 'User Logout Successfully');
    }
}
