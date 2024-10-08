<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Database\Connectors\PostgresConnector;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/create', [ProductController::class, 'create']);

Route::get('/show', [StudentController::class, 'show']);

