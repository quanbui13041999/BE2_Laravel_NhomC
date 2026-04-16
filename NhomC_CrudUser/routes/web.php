<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\listcontroler;
use App\Http\Controllers\viewcontroler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Trang chủ
Route::get('/', function () {
    return view('welcome');
});

// Các route quản lý User (CrudUserController)
Route::get('dashboard', [CrudUserController::class, 'dashboard']);
Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');
Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');
Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

// Đăng ký (RegisterController)
Route::get('/register', [RegisterController::class, 'index'])->name('user.register');
Route::post('/register', [RegisterController::class, 'store']);

// Đăng nhập/Đăng xuất (LoginController)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Danh sách và Xem chi tiết
Route::get('list', [listcontroler::class, 'listUser'])->name('user.list');
Route::get('view', [viewcontroler::class, 'viewUser'])->name('user.viewUser');