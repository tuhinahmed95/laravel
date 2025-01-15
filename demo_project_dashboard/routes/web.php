<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::prefix("/admin")->name('admin.')->group(function(){
//     Route::get("/dashboard",[HomeController::class, 'Dashboard'])->name('dashboard');
//     Route::get("/users/manage",[HomeController::class, 'UserList'])->name('UserList');
//     Route::get("/users/edit",[HomeController::class, 'edit'])->name('edit');

// });

Route::prefix('/admin')->group(function(){
    Route::get('dashboard',[UserController::class,'dashboard'])->name('admin.dashboard');
    Route::get('dashboard/user',[UserController::class,'user'])->name('admin.userList');
});





require __DIR__.'/auth.php';
