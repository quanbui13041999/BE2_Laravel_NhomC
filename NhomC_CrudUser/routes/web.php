<?php
<<<<<<< HEAD

use App\Http\Controllers\listcontroler;
=======
use App\Http\Controllers\viewcontroler;
>>>>>>> origin/dat/view
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('list', [listcontroler::class, 'listUser'])->name('user.list');
=======
Route::get('view', [viewcontroler::class, 'viewUser'])->name('user.viewUser');
>>>>>>> origin/dat/view
