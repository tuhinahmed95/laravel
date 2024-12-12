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

    }
}
