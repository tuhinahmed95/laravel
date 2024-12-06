<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('login','login')->name('login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');

Route::get('dashboard',[UserController::class,'dashboardPage'])->middleware(ValidUser::class)->name('dashboard');

Route::get('dashboard/inner',[UserController::class,'inner'])->Middleware(ValidUser::class)->name('inner');

Route::get('logout',[UserController::class,'logout'])->name('logout');


