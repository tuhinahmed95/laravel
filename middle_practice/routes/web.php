<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\TestUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user')->name('user');
});

Route::view('register','register')->name('register') ->middleware(ValidUser::class);
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');


Route::view('login','login')->name('login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');

// Route::get('dashboard',[UserController::class,'dashboardPage'])->name('dashboard')
//           ->middleware(['IsUserValid:admin',TestUser::class]);

// Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner')
//           ->middleware(['IsUserValid:admin',TestUser::class]);

Route::get('dashboard',[UserController::class,'dashboardPage'])->name('dashboard')
          ->middleware(['auth','IsUserValid:admin']);

Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner')
          ->middleware(['auth','IsUserValid:admin']);

// Route::middleware('ok-user')->group(function(){
//     Route::get('dashboard',[UserController::class,'dashboardPage'])->name('dashboard');

//     Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner')->withoutMiddleware([TestUser::class]);
// });

// Route::withoutMiddleware([TestUser::class])->group(function(){
//     Route::get('dashboard/inner',[UserController::class,'innerPage'])->name('inner');
// });

Route::get('logout',[UserController::class,'logout'])->name('logout');
