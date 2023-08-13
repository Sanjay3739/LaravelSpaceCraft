<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basemane\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Users\ProfileController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', [LoginController::class, 'loginview'])->name('loginview');
Route::post('/loginrequest', [LoginController::class, 'loginrequest'])->name('login-post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'registerview'])->name('registerview');
Route::post('/registerrequest', [RegisterController::class, 'registerrequest'])->name('register-post');


// Public Dashbord
Route::get('/', [DashboardController::class, 'index']);

// User Profile Routes
Route::get('/userProfile', [ProfileController::class, 'index']);


