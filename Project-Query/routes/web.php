<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'showUsers'])->name('user');

Route::get('/users/{id}', [UserController::class, 'singleUsers'])->name('view.user');

Route::get('/adduser', [UserController::class, 'addUser'])->name('adduser');

Route::get('/update', [UserController::class, 'updateUser'])->name('update');