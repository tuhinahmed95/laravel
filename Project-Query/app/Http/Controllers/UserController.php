<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){ 
        $users = DB::table('users')->get();
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
    public function addUser(){ 
        $user = DB::table('users')
                    ->insertGetId(
                        [
                            'name'   => 'Shahin Molla',
                            'email'  => 'sahen@gmail.com',
                            'age'    => 39,
                            'city'   => 'faridpur',
                            
                        ],
                        
                     
                    );
            return $user;
        // return view('adduser', ['add' =>$user]); 
    //     if($user){ 
    //         echo "<h1>Data succesfully Added</h1>";
    //     }else{ 
    //         echo "<h1>Data Not Added</h1>";
    //     }          
    }
    public function updateUser(){ 
        $user = DB::table('users')
                    ->where('id',1)
                    ->update([ 
                        'city'=> 'Dhaka'
                    ]);
    }

  

}
