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
                    [
                        'name'=>'Nehal',
                        'email'=>'nehal@gmail.com',
                        'age' =>'23',
                        'city'=>'Sirajgang',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'Munna',
                        'email'=>'munna@gmail.com',
                        'age' =>'25',
                        'city'=>'sylhet',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'Ripon vai',
                        'email'=>'ripon@gmail.com',
                        'age' =>'47',
                        'city'=>'Chandpur',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'Depika',
                        'email'=>'depika@gmail.com',
                        'age' =>'37',
                        'city'=>'Mumbai',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ],
                    [
                        'name'=>'Shahrukh khan',
                        'email'=>'shahrukh@gmail.com',
                        'age' =>'60',
                        'city'=>'Mumbai Bandara',
                        'created_at'=>now(),
                        'updated_at'=>now()
                    ]
                ]);

       if($user){
             echo "<h1>Data Added Successfully</h1>";
       }
       else{
             echo "<h1>Data Not Inserted</h1>";
       }
    }

    public function updateUser(){
            $users = DB::table('users')
                    ->where('id',4)
                    ->update([
                        'city'=>'Delli',
                        'name'=>'Hrithik',
                        'age'=>'47'
                    ]);

            if($users){
                echo "<h1>Update Successfully</h1>";
            }
    }

    public function deleteUser(string $id){
        $users = DB::table('users')
                    ->where('id',$id)
                    ->delete();

        if($users){
            return redirect()->route('home');
        }
    }
}
