<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/signin', [UserController::class, 'signin']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/signup', [UserController::class, 'signup']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [BookController::class, 'dashboard']);
});
