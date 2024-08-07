<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::resource('/user', UserController::class);