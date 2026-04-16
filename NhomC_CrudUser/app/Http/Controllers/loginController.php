<?php

namespace App\Http\Controllers;

use App\Models\User;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psy\ManualUpdater\Checker;

class loginController extends Controller
{
    public function showLoginForm() {
        if(Auth::check()) {
             return redirect('/');
        }
        return view('/');
    }
    // xu ly dang nhap
    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không hợp lệ',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
        ]);
         if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'email or mat khau khong chinh xac',
        ])->withInput($request->only('email'));
    }
}