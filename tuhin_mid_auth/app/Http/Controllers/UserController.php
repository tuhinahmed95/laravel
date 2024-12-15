<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);
        
        // $usercreate = User::create($validate);
        $userdata = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect()->route('auth.login');
    }

    public function login(Request $request){
        $credintial = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credintial)){
            return redirect()->route('dashboard');
        }
    }

    public function dashboard(){
        return view('auth.dashboard');
    }

    public function studentPage(){
        return view('auth.studenthome');
    }
}
