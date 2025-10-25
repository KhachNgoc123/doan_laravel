<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    // Tên bảng trong database
    protected $table = 'sanpham';

    // Các cột cho phép ghi dữ liệu
    protected $fillable = [
        'masp',
        'ten',
        'gia',
        'giakm',
        'hinh',
        'mota',
        'madm',
        'tags',
        'trangthai',
        'userid',
        'loai',
    ];
}
