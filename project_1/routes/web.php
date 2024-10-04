<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.page.dashboard');
    })->name('dashboard');

    Route::prefix('user')->group(function () {
       Route::get('/',[UserController::class, 'index'] )->name('admin.user');
       Route::get('create',[UserController::class, 'create'] )->name('admin.user.create');
       Route::post('create',[UserController::class, 'store'] );
    });
    
    
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
