<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);
    }
}
