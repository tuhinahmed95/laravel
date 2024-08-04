<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function addUser(UserRequest $req){ 

        // return $req->all();
        // return $req -> only(['username','usercity']);
        return $req -> except(['password','usercity']);
    }
}
