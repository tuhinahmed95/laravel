<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/post {id}', function (string $id) {
//     return "<h1>Post Id :". $id ." </h1>";
// });

// Route::view('post','/post');

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });

