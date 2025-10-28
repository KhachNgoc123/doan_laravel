<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserController extends Controller
{
    // Hiển thị form login
    public function showLoginForm()
    {
        return view('user.pages.login'); // Trỏ đến resources/views/user/pages/login.blade.php
    }

    // Xử lý login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Email không hợp lệ!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự!',
        ]);

        $user = UserModel::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Lưu thông tin user vào session
            session(['user' => $user]);
            return redirect('/'); // Trang chính người dùng
        }

        return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }

    // Logout
    public function logout()
    {
        session()->forget('user'); // Xóa session user
        return redirect()->route('user.login')->with('success', 'Đã đăng xuất!');
    }
}


