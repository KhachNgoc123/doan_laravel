<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(): Factory|View
    {
        // sanr pham moiw mhat
        
        $newProducts = sanpham::orderBy('masp', 'desc')->take(8)->get();

        // san pham pho bien nhat
        $popularProducts = sanpham::orderBy('soluong', 'desc')->take(8)->get();

        // san pham dat nhat 
        
      $expensiveProducts= sanpham::orderBy('dongia', 'desc')->take(8)->get();


        return view('user.pages.index', compact('newProducts', 'popularProducts', 'expensiveProducts'));
        
    }
   
}
