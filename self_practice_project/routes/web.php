<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('register');

Route::view('login','login')->name('login');
Route::post('loginSave',[UserController::class,'login'])->name('registerSave');

Route::get('dashboard',[UserController::class,'dashBoard'])->name('dashboard');
Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner');
