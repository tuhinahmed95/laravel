<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class,'showusers']);
Route::get('/adduser',[UserController::class,'addUser']);
