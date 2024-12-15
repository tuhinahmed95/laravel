<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('auth.register','auth.register')->name('auth.register');
Route::post('registerMatch',[UserController::class,'register'])->name('registerMatch');

Route::view('auth.login','auth.login')->name('auth.login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');
