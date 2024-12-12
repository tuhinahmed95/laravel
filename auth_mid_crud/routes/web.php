<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerMatch',[AuthController::class,'register'])->name('registerMatch');

Route::view('login','login')->name('login');
Route::post('loginMatch',[AuthController::class,'login'])->name('loginMatch');

Route::get('dashboard',[AuthController::class,'dashboardPage'])->name('dashboard')->middleware(AuthMiddleware::class);

Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::resource('studnent',StudentController::class);
