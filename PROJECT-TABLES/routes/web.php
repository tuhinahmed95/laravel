<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'showStudents']);

Route::get('/union', [StudentController::class, 'uniondata']);
