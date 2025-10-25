<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;

class SanphamController extends Controller
{
    /**
     * Hiển thị form thêm sản phẩm
     */
    public function create()
    {
        return view('admin.pages.addproduct'); // hoặc 'admin.sanpham.create' nếu bạn để ở thư mục đó
    }

    /**
     * Xử lý lưu sản phẩm mới vào CSDL
     */
    public function store(Request $request)
    {
        // ✅ Bước 1: Validate dữ liệu
        $validated = $request->validate([
            'masp' => 'required|string|max:50',
            'ten' => 'required|string|max:255',
            'gia' => 'required|numeric|min:0',
            'giakm' => 'nullable|numeric|min:0',
            'hinh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mota' => 'nullable|string',
            'madm' => 'nullable|string|max:50',
            'tags' => 'nullable|string|max:255',
            'trangthai' => 'nullable|boolean',
            'userid' => 'nullable|integer',
            'loai' => 'nullable|string|max:50',
        ]);

        // ✅ Bước 2: Khởi tạo sản phẩm mới
        $sanpham = new Sanpham();
        $sanpham->masp = $request->masp;
        $sanpham->ten = $request->ten;
        $sanpham->gia = $request->gia;
        $sanpham->giakm = $request->giakm;
        $sanpham->mota = $request->mota;
        $sanpham->madm = $request->madm;
        $sanpham->tags = $request->tags;
        $sanpham->trangthai = $request->trangthai ?? 1;
        $sanpham->userid = $request->userid ?? 1;
        $sanpham->loai = $request->loai;

        // ✅ Bước 3: Xử lý upload hình ảnh (nếu có)
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sanpham'), $filename);
            $sanpham->hinh = $filename;
        }

        // ✅ Bước 4: Lưu vào database
        $sanpham->save();

        // ✅ Bước 5: Chuyển hướng & báo thành công
        return redirect()->route('sanpham.create')->with('success', 'Thêm sản phẩm thành công!');
    }
}
