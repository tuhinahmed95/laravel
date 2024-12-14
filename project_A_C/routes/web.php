<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('auth/register','auth.register')->name('register');
Route::post('registerMatch',[UserController::class, 'register'])->name('registerMatch');

Route::view('auth/login','auth.login')->name('login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');

Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::get('dashboard/inner',[UserController::class,'inner'])->name('inner');
