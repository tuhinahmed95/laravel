<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_update(){
        return view('admin.user.profile');
    }

    public function user_info_update(){
        echo "update";
    }
}
