<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('auth.register','register');
Route::post('registerMatch',[UserController::class,]);
