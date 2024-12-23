<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
        ]);

        User::create($validate);
        return view('login');
    }

    public function login(Request $request){

    }

    public function dashBoard(){

    }

    public function innerPage(){

    }

    public function logout(){
        
    }
}
