<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model {
    protected $table = 'danhmuc';
    protected $primaryKey = 'madm';
    protected $fillable = ['tendm'];
    public $timestamps = false; 
}
