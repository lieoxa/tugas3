<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::get('/movie', [AuthController::class, 'movie'])->name('movie');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/detail', [AuthController::class, 'detail'])->name('detail');
Route::get('/search', [AuthController::class, 'search'])->name('search');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/watchlist', [AuthController::class, 'watchlist'])->name('watchlist');

