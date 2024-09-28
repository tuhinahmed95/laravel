<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showPage(){
        $users = DB::table('users')->get();

        return view('allusers',compact('users'));
    }

    public function create(){
        $users = DB::table('users')
                    ->insert([
                        [
                            'name'=>'tuhin',
                            'email'=>'tuhin@gmail.com',
                            'age'=>'29',
                            'city'=>'Gaibandha'
                        ],
                        [
                            'name'=>'Salman',
                            'email'=>'salman@gmail.com',
                            'age'=>'54',
                            'city'=>'Mumbai'
                        ],
                        [
                            'name'=>'Shahrukh',
                            'email'=>'shahrukh@gmail.com',
                            'age'=>'34',
                            'city'=>'Delli'
                        ],

                        ]);
    }

    public function update(){
        $users = DB::table('users')
                    ->where('id',2)
                    ->update([
                        'name'=>'Amitabh'
                    ]);
    }

    public function deleteUser(){
        $users = DB::table('users')
                    ->where('id',2)
                    ->delete();
    }


}
