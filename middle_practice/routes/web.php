<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\TestUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register')->name('register') ->middleware(ValidUser::class);
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');


Route::view('login','login')->name('login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');

// Route::get('dashboard',[UserController::class,'dashboardPage'])->name('dashboard')
//           ->middleware(['IsUserValid',TestUser::class]);

// Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner')
//           ->middleware([ValidUser::class,TestUser::class]);

Route::middleware('IsUserValid',TestUser::class)->group(function(){
    Route::get('dashboard',[UserController::class,'dashboardPage'])->name('dashboard');

    Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner')->withoutMiddleware([TestUser::class]);
});

// Route::withoutMiddleware([TestUser::class])->group(function(){
//     Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner');
// });

Route::get('logout',[UserController::class,'logout'])->name('logout');
