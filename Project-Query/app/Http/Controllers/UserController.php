<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){ 
        $users = DB::table('users')->Paginate(4);
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
    public function addUser(Request $req){ 
        $user = DB::table('users')
                    ->insert(
                        [
                            'name'   =>  $req -> username,
                            'email'  =>  $req -> useremail,
                            'age'    =>  $req -> userage,
                            'city'   =>  $req -> usercity,
                            
                        ],
            
                    
                    );

           if($user){ 
            return redirect()->route('home');
           }        
    }
    public function updatePage(string $id){ 
        $user = DB::table('users')->find($id);
        return view('updateuser', ['data' => $user]);
    }

    
    public function updateUser(Request $req, $id){ 
        $user = DB::table('users')
                    ->where('id',$id)
                    ->update(
                        [ 
                            'name'   =>  $req -> username,
                            'email'  =>  $req -> useremail,
                            'age'    =>  $req -> userage,
                            'city'   =>  $req -> usercity,
                        ]);
                    // ->increment('age', 2);
                    // ->decrement('age', 2,['city'=>'Dhaka']);
                
        if($user){ 
            return redirect()->route('home');
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
