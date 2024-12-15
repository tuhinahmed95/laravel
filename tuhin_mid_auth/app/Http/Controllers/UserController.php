<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);

        $userdata = User::create($validate);
        return redirect()->route('login');
    }
}
