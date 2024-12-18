<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){

    }

    public function login(Request $request){

    }

    public function dashBoard(){
        return view('dashboard');
    }
}
