<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class UserModel extends Model
{
    //ten bang 
    protected $table = 'user';
    public $timestamps=false;
    // cacs cot trong bang 
    protected $fillable = ['name', 'password','email','sdt','gioitinh','role'];
    //ma hoa mk 
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
