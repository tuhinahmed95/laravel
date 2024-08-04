<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommetController;





Route::resource('users', UserController::class);

Route::resource('users.comments', CommetController::class);
