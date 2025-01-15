<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(){
        return view('layouts.admin.master');
    }

    public function user(){
        $users = User::latest()->get();
        return view('pages.user_list',compact('users'));
    }
    public function edit($id){
        $user = User::findorFail($id);
        return view('pages.edit',compact('user'));
    }
}
