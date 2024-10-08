<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view',[UserController::class,'showusers'])->name('home');

Route::get('/adduser',[UserController::class,'addUser'])->name('adduser');

Route::get('/store',[UserController::class,'store'])->name('store');

Route::get('/update/{id}',[UserController::class,'updateUser']);

Route::get('/delete/{id}',[UserController::class,'deleteUser'])->name('delete.user');
