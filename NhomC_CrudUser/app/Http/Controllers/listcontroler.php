<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class listcontroler extends Controller
{
    public function listUser()
    {
         //tam thoi bo qua de test if (Auth::check()) {
            $users = User::all();
            return view('list', ['users' => $users]);
      //  }
       //tam thoi bo qua de test  return redirect("login")->withSuccess('You are not allowed to access');
    }
}