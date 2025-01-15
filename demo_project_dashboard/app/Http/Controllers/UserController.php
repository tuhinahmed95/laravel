<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('layouts.admin.master');
    }

    public function user(){
        return view('pages.user_list');
    }
}
