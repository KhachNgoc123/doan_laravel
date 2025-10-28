<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserModel::create([
        "name"      => "Nguyen Ngoc",
        "email"     => "admin@gmail.com",
        "password"  => Hash::make('123456'), 
        "sdt"       => "0998765432",
        "gioitinh"  => "Nữ",
        "role"      => "admin",
        ]);
  
    // Tài khoản user
        UserModel::create([
        "name" => "Nguyen Cuu Long",
        "email" => "long123@gmail.com",
        "password" => Hash::make("123456"),
        "sdt" => "0987654321",
        "gioitinh" => "Nam",
        "role" => "admin",
        ]);
         UserModel::create([
        "name" => "Chau Nguyen Nhat Huy",
        "email" => "huy123@gmail.com",
        "password" => Hash::make("123456"),
        "sdt" => "0987654321",
        "gioitinh" => "Nam",
        "role" => "admin",
        ]);
    }
}
