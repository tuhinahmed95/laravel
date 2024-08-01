<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });

// ---- Group Routing ----

Route::controller(UserController::class)->group(function(){ 
    Route::get('/',  'showUsers')->name('home');

    Route::get('/users/{id}' , 'singleUsers')->name('view.user');

    Route::post('/add',  'addUser')->name('addUser');

    Route::get('/update/{id}',  'updateuser')->name('update.user');
    Route::get('/updatepage/{id}',  'updatePage')->name('update.page');

    Route::get('/delete/{id}',  'deleteUser')->name('delete.user');

    Route::get('/deletealluser',  'deleteAllUser');

    Route::view('newuser','/adduser');
});


// ----- Single Routing -----
// Route::get('/', [UserController::class, 'showUsers'])->name('home');

// Route::get('/users/{id}', [UserController::class, 'singleUsers'])->name('view.user');

// Route::post('/add', [UserController::class, 'addUser'])->name('addUser');

// Route::get('/update', [UserController::class, 'updateUser'])->name('update');
// Route::get('/updatepage/{id}', [UserController::class, 'updatePage'])->name('update.page');

// Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');

// Route::get('/deletealluser', [UserController::class, 'deleteAllUser']);

// Route::view('newuser','/adduser');