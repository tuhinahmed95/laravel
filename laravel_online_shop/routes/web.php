<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminloginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;

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


Route::group(['prefix' => 'admin'], function(){ 


    Route::group(['middleware' => 'admin.guest'], function(){ 
        Route::get('/login', [AdminloginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminloginController::class, 'authenticate'])->name('admin.authenticate');

    });

    Route::group(['middleware' => 'admin.auth'], function(){

        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');

        // category Route
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        // Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        // Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

        

    });
});
