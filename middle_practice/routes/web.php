<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('regiserSave');

Route::view('login','login')->name('login');
