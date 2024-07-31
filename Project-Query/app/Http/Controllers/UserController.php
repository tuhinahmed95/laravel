<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){ 
        $users = DB::table('users')->whereIn('city',['mumbai','delli','pune'])->get();
        return view('allusers', ['data'=> $users]);
        // return $users;
        // dd($users);
        // dump($users);
        // foreach($users as $user){ 
        //     echo $user->name . "<br>";
        // }
        
    }

    public function singleUsers(string $id){ 
        $user = DB::table('users')->where('id',$id)->get();
        return view('user',['data' => $user]);
    }
}
