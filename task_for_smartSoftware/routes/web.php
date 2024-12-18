<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerMatch',[UserController::class,'register'])->name('registerMatch');

Route::view('login','login')->name('login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');

Route::get('dashboard',[UserController::class,'dashBoard'])->name('dashboard');
Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::resource('student',StudentController::class);
