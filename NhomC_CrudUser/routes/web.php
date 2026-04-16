<?php


use App\Http\Controllers\listcontroler;

use App\Http\Controllers\viewcontroler;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('list', [listcontroler::class, 'listUser'])->name('user.list');


Route::get('view', [viewcontroler::class, 'viewUser'])->name('user.viewUser');
