<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
use Illuminate\Support\Facades\Log; 
class AdminController extends Controller
{
       // ----trang login-----

    public function login(Request $request)
    {
        //kiem tra validation 
        
         $request->validate([
            'email'   => 'required|email|max:100',   
            'password' => 'required|min:6',
            
        ], 
        [
        'email.required' => 'Vui lòng nhập email!',
        'email.email' => 'Email không hợp lệ!',
        'password.required' => 'Vui lòng nhập mật khẩu!',
        'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự!',
        ]);

         //tim user theo email
        $admin = UserModel::where('email', $request->email)->first();
        Log::info('Kết quả tìm user:', [$admin]);
        // neu ton tai va mk dung
        if ($admin && Hash::check($request->password, $admin->password)) {
    
        // Nếu là admin
            if ($admin->role === 'admin')
            {
                session(['admin' => $admin]);
                return redirect('/ad'); // url Trang quản trị
            } 
            // Nếu là user thường
            else if ($admin->role === 'user')
            {
                session(['user' => $admin]);
                return redirect('/'); // Trang người dùng
            }

        }
        else 
        {
                // Nếu sai tài khoản hoặc mật khẩu
            Log::warning('Sai tài khoản hoặc mật khẩu:', [$request->email]);
            return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
        }

        
    }
    //-----trang logout-----

    public function logout()
    {
        session()->forget('admin');
        session()->forget('user');

        // chuyen den route admin.login
        return redirect()->route('admin.login')->with('success', 'Đã đăng xuất!');
    }

    
}