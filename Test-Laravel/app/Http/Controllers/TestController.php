<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){ 
        return view('welcome');
    }

    public function another(){ 
        return view('test');
    }
}
