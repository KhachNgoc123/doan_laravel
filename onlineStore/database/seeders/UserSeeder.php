<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserModel::create([
            "name"=>"Nguyen A",
            "password"=>"123@admin",
            "email"=>"admin123@gmail.com",
            "sdt"=>"0998765432",
            "gioitinh"=>"Nam"
        ]);
    }
}
