<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Controllers_register;

Route::get('/register', [Controllers_register::class, 'index']);
Route::post('/register', [Controllers_register::class, 'store']);