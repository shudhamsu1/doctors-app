<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/',[UserController::class, 'homepage'])->name('homepage');

Route::post('/register', [UserController::class, 'register'])->name('user.register');

Route::post('/login',[UserController::class, 'login'])->name('userlogin');

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/search', [UserController::class, 'search'])->name('search');

Route::post('/appointment', [UserController::class, 'appointment'])->name('create.appointment');
