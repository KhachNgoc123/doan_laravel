<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;

class SanPhamController extends Controller {

    public function create() {
        $danhmuc = DanhMuc::all(); // Lấy tất cả danh mục
        return view('admin.pages.addproduct', compact('danhmuc')); // truyền sang view
    }
// Validate dữ liệu
    public function store(Request $request) {
        // Validate dữ liệu
        $request->validate([
            'tensp' => 'required|string|max:255',
            'dongia' => 'required|numeric|min:0',
            'soluong' => 'required|integer|min:0',
            
        ]);
       
            // Lưu sản phẩm
            $sanpham = new SanPham();
            $sanpham->tensp = $request->tensp;
            $sanpham->madm =  $request->madm;
            $sanpham->dongia = $request->dongia;
            $sanpham->giakm = $request->dongia * 0.9; // giảm 10%
            $sanpham->soluong = $request->soluong;
            $sanpham->mota = $request->mota;
            $sanpham->tag = $request->tag ?? null;
           if($request->madm==""){
               $danhmuc = new DanhMuc();
               $danhmuc->tendm= $request->tendm;
               $danhmuc->save();
               return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');
           }
            

           
            $sanpham->trangthai = $request->trangthai;
            if ($request->hasFile('hinh')) {
                $file = $request->file('hinh');
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('uploads'), $filename);
                $sanpham->hinh = $filename;
            }
            $sanpham->save();

            return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');
        
            return redirect()->back()->with('error', 'Thêm sản phẩm thất bại: '.$e->getMessage());
        }
    }

