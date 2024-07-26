<?php

use Illuminate\Support\Facades\Route;

function getUsers(){ 
    return  [ 
        1=>['name'=>'Tuhin',   'phone' => '01765765',  'address'  =>'Gaibandha'],
        1=>['name'=>'Sunnah',  'phone' => '01765564', 'address'   =>'Mymensing'],
        2=>['name'=>'Rafia',   'Phone'=>'879997667',   'address'  =>'Gaibandha'],
        3=>['name'=>'Fariha',  'Phone'=>'98098766',   'Address'   =>'Dhaka'],
        4=>['name'=>'Anika',   'phone'=>'686897663',   'Address'  =>'Sylhet'],

    ];
}


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/users', function () {
    // $city = "Gaibandha";
    $names = getUsers();
    // return view('users',['passdata' => 'Tuhin Ahmed', 'address'=>$city]);
    return view('users', ['user'=>$names]);

});

Route::get('/user/{id}', function ($id) {
    $users = getUsers();
    $user = $users[$id];

    return view('user',['id' => $user]);
})->name('view.user');