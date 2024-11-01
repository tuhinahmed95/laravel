<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('/student',StudentController::class);

Route::resource('/contact',ContactController::class);
