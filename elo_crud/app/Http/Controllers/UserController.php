<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('home',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $user = new User;
        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;

        // $user->save();
        $request->validate([
            'username'=>['required'],
            'useremail'=>['required'],
            'userage'=>['required'],
            'usercity'=>['required'],
        ]);
        User::create([
            'name'=>$request->username,
            'email'=>$request->useremail,
            'age'=>$request->userage,
            'city'=>$request->usercity,
        ]);

        return redirect()->route('user.index')->with('status','New Data Added Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('viewuser',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'username'=>['required'],
            'useremail'=>['required'],
            'userage'=>['required'],
            'usercity'=>['required'],
        ]);
        $user = User::find($id);
        $user->update([
            'name'=>$request->username,
            'email'=>$request->useremail,
            'age'=>$request->userage,
            'city'=>$request->usercity,
        ]);

        return redirect()->route('user.index')->with('status','user data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('status','user data delete successfully');
    }
}
