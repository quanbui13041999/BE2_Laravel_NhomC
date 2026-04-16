<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Controllers_register;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [Controllers_register::class, 'index']);
Route::post('/register', [Controllers_register::class, 'store']);

// Auth Routes
Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::post('/logout', [loginController::class, 'logout'])->name('logout');