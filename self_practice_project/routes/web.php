<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('auth/register','auth.register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('auth/login','auth.login')->name('login');
Route::post('loginSave',[UserController::class,'login'])->name('loginSave');

Route::get('dashboard',[UserController::class,'dashBoard'])->name('dashboard');
Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner');

Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::resource('student',StudentController::class);
