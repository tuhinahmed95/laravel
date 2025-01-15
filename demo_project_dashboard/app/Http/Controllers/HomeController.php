<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Dashboard(Request $request) {
        return view("layouts.admin.master");
    }
    public function UserList(Request $request) {
        $usersxxx = User::latest()->first();
    //    return  $usersxxx;
        return view("page.user_list", compact('usersxxx'));
    }
}
