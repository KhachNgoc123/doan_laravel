<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(): Factory|View
    {
        // sanr pham moiw mhat
        
        $newProducts = SanPham::orderBy('masp', 'desc')->take(8)->get();

        // san pham pho bien nhat
        $popularProducts = SanPham::orderBy('soluong', 'desc')->take(8)->get();

        // san pham dat nhat 
        
        $expensiveProducts= SanPham::orderBy('dongia', 'desc')->take(8)->get();


        return view('layouts.index', compact('newProducts', 'popularProducts', 'expensiveProducts'));
        
    }
   
}
