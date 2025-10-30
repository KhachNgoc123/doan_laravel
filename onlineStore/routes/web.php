<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\SanPhamModel;
use App\Models\UserModel;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SanPhamController;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\DanhMucController;
//kiểm tra kết nối DB 
    Route::get('/check_db', function () {
    try {
        DB::connection()->getPdo();
        return "Kết nối database thành công!";
    } catch (\Exception $e) {
        return "Lỗi kết nối database: " . $e->getMessage();
    }
    });
            // ------route cho người dùng -------
//trang chủ của người dùng (trang index)
    Route::get('/', [HomeController::class, 'index']);

             //--------trang đăng nhập của người dùng -----

// Trang login user
    Route::get('/user/login', [UserController::class, 'showLoginForm'])->name('user.login');

// Xử lý đăng nhập user
    Route::post('/user/login', [UserController::class, 'login'])->name('user.login.post');

// cac trang  tinh khac
    Route::view('/product', 'user.pages.product');
    Route::view('/typo', 'user.pages.typo');
    Route::view('/contact', 'user.pages.contact');
    Route::view('/checkout', 'user.pages.checkout');
    Route::view('/account', 'user.pages.account');
    Route::view('/single', 'user.pages.single');

             //--------trang đăng nhập của admin -------
    Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');

    Route::view('/admin/login', 'admin.pages.login')->name('admin.login');
// trang logout cua admin 

    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// ------trang phan he admin -------

Route::middleware(AdminMiddleware::class)->group(function () {
 // trang chu cuar admin 
    Route::get('/ad',function(){
        return view('layouts.admin');
    });

// Thêm sản phẩm (hiển thị form)
    Route::get('/addproduct', [SanPhamController::class, 'create'])->name('sanpham.create');
// Lưu sản phẩm (xử lý form
    Route::post('/sanpham/store', [SanPhamController::class, 'store'])->name('sanpham.store');


});
















