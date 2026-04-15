<?php

use App\Http\Controllers\listcontroler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list', [listcontroler::class, 'listUser'])->name('user.list');