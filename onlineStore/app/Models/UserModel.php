<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    protected $table = 'user';
    public $timestamps=false;
    protected $fillable = ['name', 'password','email','sdt','gioitinh'];
      protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
