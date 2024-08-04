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
            'userage'=>'required|numeric',
            'usercity'=>'required',
        ]);

        return $req->all();
    }
}
