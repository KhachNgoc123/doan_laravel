<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    // Tên bảng trong database
    protected $table = 'sanpham';

    // Các cột cho phép ghi dữ liệu
     protected $primaryKey = 'masp';
    protected $fillable =  [ 'tensp', 'madm','giakm', 'soluong', 'mota', 'dongia', 'trangthai', 'tag', 'hinh'];
    public $timestamps = false; 

        

}
