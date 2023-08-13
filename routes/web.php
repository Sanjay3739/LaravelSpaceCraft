<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [homecontroller::class, 'index']);
Route::get('/login', [logincontroller::class, 'loginview'])->name('loginview');
Route::post('/loginrequest', [logincontroller::class, 'loginrequest'])->name('login-post');
Route::get('/logout', [logincontroller::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'registerview'])->name('registerview');
Route::post('/registerrequest', [RegisterController::class, 'registerrequest'])->name('register-post');
