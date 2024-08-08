<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::resource('student', StudentController::class);
