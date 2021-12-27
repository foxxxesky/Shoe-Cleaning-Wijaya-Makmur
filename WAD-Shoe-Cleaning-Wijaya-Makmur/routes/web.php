<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('pages.home');
});

// Register
Route::get('/Register', [RegisterController::class, 'index']);
Route::post('/Register', [RegisterController::class, 'store']);

// Login
Route::get('/Login', [RegisterController::class, 'login']);