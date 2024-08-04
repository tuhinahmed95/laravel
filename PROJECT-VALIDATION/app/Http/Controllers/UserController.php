<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(Request $req){ 

        $req ->validate([ 
            'username'=>'required',
            'useremail'=>'required|email',
            'password'=>'required|alpha_num|min:6',
            'userage'=>'required|numeric|between:18,25',
            'usercity'=>'required',
        ], 
        [ 
            'username.required'=> 'User Name is required',
            'useremail.required'=> 'User Name is required',
            'useremail.required'=> 'Enter Your Correct Email',
            'password.required'=> 'User password is required',
            'userage.required'=> 'User age is required',
            'userage.numerice'=> 'User age must be numeric',
            'userage.mi:18'=> 'User age must be 18',
            'usercity.required'=> 'User city is required',
        ]
    );

        return $req->all();
    }
}
