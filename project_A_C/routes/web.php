<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('auth/register','register')->name('register');
Route::post('registerMatch',[UserController::class, 'registerMatch']);

Route::view('auth/login','login');
Route::post('loginMatch',[UserController::class,'login']);

Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');
