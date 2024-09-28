<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view',[UserController::class,'showPage'])->name('home');
Route::get('/insert',[UserController::class,'create'])->name('create');
