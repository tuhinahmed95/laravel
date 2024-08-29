<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;



// Route::resource('user', UserController::class);

// Route::resource('role', RoleController::class);

Route::get('manyrelation', [ProductController::class, 'manyrealation']);
