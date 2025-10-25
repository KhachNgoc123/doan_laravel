<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class HomeController extends Controller
{
    public function index(): Factory|View
    {
        // sanr pham moiw mhat
        $newProducts = sanpham::orderBy('masp', 'desc')->take(10)->get();

          $popularProducts = sanpham::orderBy('soluong', 'desc')->take(10)->get();

          $category1Products = sanpham::where('madm', 1)->take(10)->get();
        $category2Products = sanpham::where('madm', 2)->take(10)->get();
        $category3Products = sanpham::where('madm', 3)->take(10)->get();
        return view('user.pages.index', compact(
           'newProducts', 'popularProducts',
            'category1Products',
            'category2Products',
            'category3Products'));
    }
    // public function sale(): Factory|View
    // {
    //     $sanpham = Sanpham::take(2)->get();
    //     return view('user.index', compact('sanpham'));
    // }
}
