<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class, 'show']);

Route::get('/student/create',[StudentController::class,'create'])->name('create');
Route::get('/student/store',[StudentController::class,'store'])->name('store');
