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
                    ->insert([
                        [
                            'name'   => 'Fima',
                            'email'  => 'fima@gmail.com',
                            'age'    => 30,
                            'city'   => 'Sherpur',
                            
                        ],
                        [
                            'name'   => 'Shekul Islam',
                            'email'  => 'shekul@gmail.com',
                            'age'    => 30,
                            'city'   => 'Gajipur',
                            
                        ],
                        [
                            'name'   => 'Shakil',
                            'email'  => 'shakil@gmail.com',
                            'age'    => 30,
                            'city'   => 'Jamalpur',
                            
                        ],
                        [
                            'name'   => 'Rayhan',
                            'email'  => 'rayraju@gmail.com',
                            'age'    => 35,
                            'city'   => 'Rajshai',
                            
                        ],
                    ]
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
                    ->where('id',3)
                    // ->update(
                    //     [ 
                    //     'name' => 'Farazana Epa Faizu',
                    //     'age'  => 27,
                    //     'city' => 'Faridpur Vanga'
                    // ]
                    // ->increment('age', 2);
                    ->decrement('age', 2,['city'=>'Dhaka']);
                
        if($user){ 
            echo "<h1>Data Update Successfully</h1>";
        }            
    }
    public function deleteUser(string $id){ 
        $user = DB::table('users')
                    ->where('id',$id)
                    ->delete();
        if($user){
            return redirect()->route('home');
        }
    }
    public function deleteAllUser(){ 
        $users = DB::table('users')->truncate();

    }
    
  

  

}
