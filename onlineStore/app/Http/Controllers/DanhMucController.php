<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
   public function Ajax(Request $request){
    $request->validate([
            'tendm' => 'required|string|max:255'
        ]);
// kieerm tra danh muc dax ton tai chua
    $danhmuc = DanhMuc::where('tendm', $request->tendm)->first();

        if (!$danhmuc) {
            $danhmuc = DanhMuc::create(['tendm' => $request->tendm]);
            $message = 'Đã thêm danh mục mới';
        } else {
            $message = 'Danh mục đã tồn tại';
        }
        // // Trả JSON về cho Ajax
         return response()->json([
            'success' => true,
            'madm' => $danhmuc->madm,
            'message' => $message
        ]);
   }
}
