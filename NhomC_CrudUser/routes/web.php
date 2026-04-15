<?php
use App\Http\Controllers\viewcontroler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('view', [viewcontroler::class, 'viewUser'])->name('user.viewUser');