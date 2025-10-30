<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('view_info', function (Blueprint $table) {
            $table->id();
            
            // ⚠️ PHẢI dùng cùng kiểu dữ liệu với masp (int)
            $table->unsignedInteger('masp'); 
            
            $table->string('ip_address')->nullable();
            $table->timestamps();

            // ⚠️ Foreign key trỏ về sanpham(masp)
            $table->foreign('product_id')
                ->references('masp')
                ->on('sanpham')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_info');
    }
};
