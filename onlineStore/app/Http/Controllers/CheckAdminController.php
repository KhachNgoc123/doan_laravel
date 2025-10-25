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
        // public function login(Request $request)
        // {
        // $user = [
        // 'email'=> $request->input('email'),
        // 'password'=> $request->input('password')
        // ];
        // $check = UserModel::where('email', $user['email'])->exists();

        // $check_ad = DB::select("SELECT iduser FROM users where email = ? and password = ? LIMIT 1", [$user->email, $user->password]);
        // if(count($check)>0){
        //     if(count(check_ad)>0){
        //         return redirect('/admin');
        //     }
        // }

   

public function login(Request $request)
{
    $admin = UserModel::where('email', $request->email)
                  ->where('password', $request->password)
                  ->first();

    if ($admin) {
        // Lưu session thủ công
        session(['admin' => $admin]);
        return redirect('/ad'); // hoặc route bạn muốn
    } else {
        return back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }
}

    
}