<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate dữ liệu
        $validated = $request->validate([
            'email'   => 'required|email|max:100',   // bắt buộc, có @, đúng định dạng email, tối đa 100 ký tự
            'mobile'  => 'required|digits_between:9,11', // bắt buộc, chỉ số, 9–11 ký tự
            'name'    => 'required|string|min:3|max:50', // bắt buộc, chuỗi, 3–50 ký tự
            'subject' => 'required|string|min:10|max:255', // bắt buộc, chuỗi, ít nhất 10 ký tự
        ], [
            // Thông báo lỗi tùy chỉnh
            'email.required' => 'Email là bắt buộc.',
            'email.email'    => 'Email phải đúng định dạng (phải có ký tự @).',
            'email.max'      => 'Email không được quá 100 ký tự.',

            'mobile.required' => 'Số điện thoại là bắt buộc.',
            'mobile.digits_between' => 'Số điện thoại phải từ 9 đến 11 chữ số.',

            'name.required' => 'Tên là bắt buộc.',
            'name.min'      => 'Tên phải ít nhất 3 ký tự.',
            'name.max'      => 'Tên không được vượt quá 50 ký tự.',

            'subject.required' => 'Nội dung là bắt buộc.',
            'subject.min'      => 'Nội dung phải ít nhất 10 ký tự.',
            'subject.max'      => 'Nội dung không được vượt quá 255 ký tự.',
        ]);

        // Nếu hợp lệ thì xử lý tiếp (ví dụ lưu DB)
        // User::create($validated);

        return back()->with('success', '✅ Tạo tài khoản thành công!');
    }
    
}
