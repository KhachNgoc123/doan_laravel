<?php

use App\Http\Controllers\CheckAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SanphamController;
use Illuminate\Support\Facades\DB;


Route::get('/check_db', function () {
    try {
        DB::connection()->getPdo();
        return "Kết nối database thành công!";
    } catch (\Exception $e) {
        return "Lỗi kết nối database: " . $e->getMessage();
    }
});

Route::get('/index', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', function () {
    return view('user.pages.product');
});
Route::get('/login', function () {
    return view('user.pages.login');
});
Route::get('/typo', function () {
    return view('user.pages.typo');
});
Route::get('/contact', function () {
    return view('user.pages.contact');
});
Route::get('/checkout', function () {
    return view('user.pages.checkout');
});
Route::get('/account', function () {
    return view('user.pages.account');
});
Route::get('/single', function () {
    return view('user.pages.single');
});



//Route admin
Route::get('/ad', function () {
    return view('admin.home.admin');
})->name('ad');

Route::get('/loginad', function () {
    return view('admin.pages.loginad');
});

//all product
Route::get('/ad/allproduct', function () {
    return view('admin.pages.allproduct');
});
//add product
Route::get('/ad/addproduct', function () {
    return view('admin.pages.addproduct');
});


// Route::get('/login', function () {
//     return view('admin.pages.login');
// })->name('login');


// Thêm sản phẩm (hiển thị form)
Route::get('/admin/sanpham/create', [SanphamController::class, 'create'])->name('sanpham.create');

// Lưu sản phẩm (xử lý form)
Route::post('/admin/sanpham/store', [SanPhamController::class, 'store'])->name('sanpham.store');




// Trang dashboard sau khi đăng nhập thành công

//add product
Route::get('/addproduct', function () {
    return view('admin.pages.addproduct');
});

Route::get('/test-ip', function (Illuminate\Http\Request $request) {
    return "IP của bạn là: " . $request->attributes->get('client_ip');
})->middleware('log.ip');

Route::get('/admin/login', function () {
    return view('admin.pages.login');
})->name('admin.login');

// Xử lý đăng nhập admin
Route::post('/admin/login', [CheckAdminController::class, 'login'])->name('admin.login.post');

// Route::get('/admin/login', [CheckAdminController::class, 'showLogin'])->name('admin.login');
// Route::post('/admin/login', [CheckAdminController::class, 'login'])->name('admin.login.post');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/dashboard', [CheckAdminController::class, 'dashboard'])->name('admin.dashboard');
// });
//Route::get('/user',[UserController::class, 'show']);


