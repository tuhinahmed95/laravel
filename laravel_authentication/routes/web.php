<?php

use App\Http\Controllers\UserController;
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


Route::view('register', 'register' )->name('register');
Route::post('registerSave', [UserController::class, 'resigter'])->name('registerSave');

Route::view('login', 'login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('logout', [UserController::class, 'logout'])->name('logout');



