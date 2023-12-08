<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\Test;
use App\Http\Controllers\Views;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Views::class, 'chat'])->middleware('auth')->name('chat');

Route::post('/test', [Test::class, "submit"]);

Route::prefix('auth')->group(function () {
    Route::get('/login', [Views::class, 'login'])->middleware('guest')->name('login');
    Route::get('/register', [Views::class, 'register'])->middleware('guest')->name('register');

    Route::post('/login', [Authentication::class, 'login'])->middleware('guest')->name('login.user');
    Route::post('/register', [Authentication::class, 'register'])->middleware('guest')->name('register.user');
    Route::post('/logout', [Authentication::class, 'logout'])->middleware('auth')->name('logout.user');
});
