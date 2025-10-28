<?php
namespace App\Http\Controllers;
use App\Models\SanPhamModel;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
class HomeController extends Controller
{
    public function index(): Factory|View
    {
        // sanr pham moiw mhat
        
        $newProducts = SanPhamModel::orderBy('masp', 'desc')->take(8)->get();

        // san pham pho bien nhat
        $popularProducts = SanPhamModel::orderBy('soluong', 'desc')->take(8)->get();

        // san pham dat nhat 
        
        $expensiveProducts= SanPhamModel::orderBy('dongia', 'desc')->take(8)->get();


        return view('layouts.index', compact('newProducts', 'popularProducts', 'expensiveProducts'));
        
    }
   
}
