<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;

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

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register/action', [RegisterController::class, 'register'])->name('actionregister');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login/action', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::middleware(['auth'])->group(function () {
Route::get('addcar', [CarController::class, 'car'])->name('car');
Route::post('addcar/action', [CarController::class, 'addcar'])->name('addcar');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
});
Route::get('logout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
