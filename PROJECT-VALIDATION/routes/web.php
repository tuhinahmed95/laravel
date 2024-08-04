<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::view('/','/adduser');


Route::post('/add', [UserController::class, 'addUser'])->name('addUser');
