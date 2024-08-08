<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;

Route::resource('student', StudentController::class);

Route::get('contact', [ContactController::class, 'show']);
