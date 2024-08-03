<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'showStudents']);

Route::get('/union', [StudentController::class, 'uniondata'])->name('union');

Route::get('/when', [StudentController::class, 'whendata']);

Route::get('/chunk', [StudentController::class, 'chunkdata']);

Route::get('student', [StudentController::class, 'showStudent2']);