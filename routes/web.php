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

Route::get('register', [RegisterController::class, 'registerform'])->name('register');
Route::post('register/action', [RegisterController::class, 'aksiregister'])->name('aksiregister');

Route::get('login', [LoginController::class, 'loginform'])->name('login');
Route::post('login/action', [LoginController::class, 'aksilogin'])->name('aksilogin');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('datacar', [CarController::class, 'tampilcar'])->name('datacar');
    Route::get('addcar', [CarController::class, 'tambahcar'])->name('addcar');
    Route::post('addcar/action', [CarController::class, 'aksicar'])->name('aksicar');
    Route::get('car/hapus/{id}', [CarController::class, 'hapus'])->name('hapuscar');
    Route::get('logout', [LoginController::class, 'aksilogout'])->name('aksilogout');
});



