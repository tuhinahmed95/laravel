<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserValid;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('auth/register','auth.register')->name('auth.register');
Route::post('registerMatch',[UserController::class,'register'])->name('registerMatch')->middleware(UserValid::class);

Route::view('auth/login','auth.login')->name('auth.login')->middleware(UserValid::class);
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch')->middleware(UserValid::class);

Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware(UserValid::class);
// Route::get('dashboard/student',[UserController::class,'studentPage'])->name('student')->middleware(UserValid::class);

Route::get('logout',[UserController::class,'logout'])->name('logout')->middleware(UserValid::class);

Route::get('student.studenthome',[StudentController::class,'studentHome'])->name('student.studenthome');
Route::get('student.create',[StudentController::class,'create'])->name('student.create');
Route::post('student.store',[StudentController::class,'create'])->name('student.store');
Route::get('student.show',[StudentController::class,'create'])->name('student.show');
Route::get('student.edit',[StudentController::class,'create'])->name('student.edit');
Route::post('student.update',[StudentController::class,'create'])->name('student.update');
Route::get('student.destroy',[StudentController::class,'create'])->name('student.destroy');
