<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SanPhamModel;
use App\Models\DanhMucModel;

class SanPhamController extends Controller {
// Hiển thị danh sách sản phẩm đầy đủ 
   
//hiển thị form thêm sản phẩm 
    public function create() {
        $danhmuc = DanhMucModel::all(); // Lấy tất cả danh mục
        return view('admin.pages.addproduct', compact('danhmuc')); // truyền sang view
    }
//Lưu sản phẩm mới vào DB 
    public function store(Request $request)
{
    try {
        // Validate dữ liệu bắt buộc
        $request->validate([
            'tensp'   => 'required|string|max:50',
            'dongia'  => 'required|numeric|min:0',
            'soluong' => 'nullable|integer|min:0',
            'madm'    => 'nullable|integer',
            'trangthai' => 'nullable|string|max:50',
        ]);

        $sanpham = new SanPhamModel();

        // Gán dữ liệu từ request, với giá trị mặc định nếu không có
        $sanpham->tensp = $request->tensp;
        $sanpham->dongia = $request->dongia;
        $sanpham->giakm = $request->dongia * 0.9; 
        $sanpham->soluong = $request->soluong ?? 0;
        $sanpham->mota = $request->mota ?? '';
        $sanpham->tag = $request->tag ?? null;
        $sanpham->trangthai = $request->trangthai ?? 'còn hàng';

        // Xử lý danh mục
        if ($request->madm) {
            $sanpham->madm = $request->madm;
        } elseif ($request->tendm) {
            // Thêm mới danh mục nếu người dùng nhập tên danh mục
            $danhmuc = new DanhMucModel();
            $danhmuc->tendm = $request->tendm;
            $danhmuc->save();

            $sanpham->madm = $danhmuc->madm;
        } else {
            // Nếu không có danh mục, gán mặc định
            $danhmuc = DanhMucModel::firstOrCreate(
                ['tendm' => 'Chưa phân loại']
            );
            $sanpham->madm = $danhmuc->madm;
        }

        // Xử lý hình ảnh nếu có
        if ($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $sanpham->hinh = $filename;
        }

        $sanpham->save();

        return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Thêm sản phẩm thất bại: ' . $e->getMessage());
    }
           
}
}


