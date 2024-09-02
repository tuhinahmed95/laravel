<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function regitration(Request $request){
        $data =$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
    }

    public function loginMatch(Request $request){
        $credential =$request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        if(Auth::attempt($credential)){
            return redirect()->route('dashboard');

        }
    }

    public function dashboard(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
    }
}
