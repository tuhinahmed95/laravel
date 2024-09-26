<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showusers(){
        $user = DB::table('users')->get();
        return view('allusers',compact('user'));
    }
}
