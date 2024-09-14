<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('user');
    }
    public function contact(){
        return view('contact');
    }
}
