<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserModel;

use Illuminate\Support\Facades\Log; 
class CheckAdminController extends Controller
{
       
    public function login(Request $request)
    {
        //tim user theo email
        $admin = \App\Models\UserModel::where('email', $request->email)->first();
        \Log::info('Kết quả tìm user:', [$admin]);
    // neue ton tai va mk dung
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Lưu session thủ công
            session(['admin' => $admin]);
            \Log::info('Đăng nhập thành công cho user:', [$admin->email]);
            return redirect('/ad'); // hoặc route bạn muốn
        } else {
            \Log::warning('Sai tài khoản hoặc mật khẩu:', [$request->email]);
            return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
        }
        $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
        ], 
        [
        'email.required' => 'Vui lòng nhập email!',
        'email.email' => 'Email không hợp lệ!',
        'password.required' => 'Vui lòng nhập mật khẩu!',
        'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự!',
        ]);
    }

    
}