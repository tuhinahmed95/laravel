<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showusers(){
        $users = DB::table('users')->get();
        return view('allusers',compact('users'));
    }

    public function singleuser(string $id){
        $users = DB::table('users')->where('id',$id)->get();

        return view('users',compact('users'));

    }

    public function addUser(){
        $user = DB::table('users')
                ->insert([
                    'name'=>'tasrif',
                    'email'=>'tasrif@gmail.com',
                    'age' =>'30',
                    'city'=>'dhaka',
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
    }

    public function store(){
        
    }
}
