<?php

use App\Http\Controllers\CollegestudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('show', [StudentController::class, 'show'])->name('show');
Route::get('/show/create', [StudentController::class, 'create'])->name('create');

Route::get('/contact', [ContactController::class, 'showContact'])->name('contact');

Route::get('/showstudent', [CollegestudentController::class, 'showStudents'])->name('showstudent');