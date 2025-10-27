<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;

class SanPhamController extends Controller {

    public function create() {
    $danhmuc = DanhMuc::all(); // Lấy tất cả danh mục
    return view('admin.sanpham.create', compact('danhmuc')); // truyền sang view
}

    public function store(Request $request) {
        // Validate dữ liệu
        $request->validate([
            // 'tensp' => 'required|string|max:255',
            'dongia' => 'required|numeric|min:0',
            // 'soluong' => 'required|integer|min:0',
            'tendm' => 'required|string|max:255', // Nếu nhập tên danh mục mới
        ]);

        try {
            if($request->madm && $request->madm != 'new') {
    $madm = $request->madm;
} else {
    $danhmuc = DanhMuc::firstOrCreate(['tendm' => $request->tendm]);
    $madm = $danhmuc->madm;
}

            // Lưu sản phẩm
            $sanpham = new SanPham();
            $sanpham->tensp = $request->tensp;
            $sanpham->madm = $danhmuc->madm;
            $sanpham->dongia = $request->dongia;
            $sanpham->giakm = $request->dongia * 0.9; // giảm 10%
            $sanpham->soluong = $request->soluong;
            $sanpham->mota = $request->mota;
           $sanpham->tag = $request->tag ?? null;
            

           
            $sanpham->trangthai = $request->trangthai;
            if ($request->hasFile('hinh')) {
                $file = $request->file('hinh');
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('uploads'), $filename);
                $sanpham->hinh = $filename;
            }
            $sanpham->save();

            return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Thêm sản phẩm thất bại: '.$e->getMessage());
        }
    }
}
