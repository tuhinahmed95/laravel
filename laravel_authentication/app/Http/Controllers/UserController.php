<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $data['password'] = bcrypt($data['password']);

        try {
            $user = User::create($data);

            if($user){
                return redirect()->route('login')->with('success', 'আপনি সফলভাবে নিবন্ধন করেছেন।');
            }
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'নিবন্ধনে সমস্যা হয়েছে, দয়া করে আবার চেষ্টা করুন।']);
        }
    }

}
