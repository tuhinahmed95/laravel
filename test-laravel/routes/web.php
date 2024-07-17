<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/post', function () {
//     return view('post');
// });

Route::view('post','/post');

