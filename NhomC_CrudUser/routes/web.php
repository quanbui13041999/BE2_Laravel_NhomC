<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Controllers_register;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/register', [Controllers_register::class, 'index']);
Route::post('/register', [Controllers_register::class, 'store']);



Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');