<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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

// Main
Route::get('/', [MainController::class, 'index']);
Route::get('/Home', [MainController::class, 'index']);

// Admin
Route::get('/HomeAdmin', [MainController::class, 'indexAdmin'])->middleware('is_admin');

// Register
Route::get('/Register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/Register', [RegisterController::class, 'store']);

// Login
Route::get('/Login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate'])->name('login-user');
Route::post('/Logout', [LoginController::class, 'logout']);


// Service User
Route::get('/Service', [MainController::class, 'service']);
Route::get('/StandartClean', [MainController::class, 'standartClean'])->middleware('auth');
Route::post('/StandartClean', [MainController::class, 'store'])->middleware('auth')->name('standart-order');