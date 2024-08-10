<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;



Route::resource('user', UserController::class);

Route::resource('role', RoleController::class);
