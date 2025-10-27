<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       DB::table('user')->insert([
    'name' => 'admin',
    'password' => Hash::make('123456'),
    'email' => 'admin@gmail.com',
    'sdt' => '0123456789',
    'gioitinh' => 'Nam',
]);
    }
}
