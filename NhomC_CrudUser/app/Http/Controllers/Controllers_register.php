<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Controllers_register extends Controller
{
    // Hiển thị form đăng ký
    public function index()
    {
        return view('register');
    }

    // Xử lý đăng ký
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Lưu vào database
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Đăng ký thành công!');
    }
}