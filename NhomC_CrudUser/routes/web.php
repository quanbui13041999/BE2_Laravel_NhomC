<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\listcontroler;
use App\Http\Controllers\UpdateUserController;
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

// --- QUẢN LÝ USER (CÁC CONTROLLER ĐÃ TÁCH) ---

// 1. Danh sách User
Route::get('list', [listcontroler::class, 'listUser'])->name('user.list');

// 2. Xem chi tiết User
Route::get('view', [viewcontroler::class, 'viewUser'])->name('user.viewUser');

// 3. Cập nhật User (Update)
Route::get('/update-user', [UpdateUserController::class, 'showUpdateForm'])->name('user.updateUser');
// Route xử lý lưu dữ liệu update
Route::post('/post-update-user', [UpdateUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

// 4. Xóa User (Delete)
Route::get('/delete-user', [DeleteUserController::class, 'deleteUser'])->name('user.deleteUser');


// --- ĐĂNG KÝ (RegisterController) ---
Route::get('/register', [RegisterController::class, 'index'])->name('user.register');
Route::post('/register', [RegisterController::class, 'store']);


// --- ĐĂNG NHẬP / ĐĂNG XUẤT (LoginController) ---
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// --- CÁC ROUTE CÒN LẠI (TỪ CRUDUSERCONTROLLER CŨ) ---
Route::get('dashboard', [CrudUserController::class, 'dashboard']);
Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');