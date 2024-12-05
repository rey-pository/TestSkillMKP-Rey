<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('product_category', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('category_code')->unique(); // Kode kategori yang unik
            $table->string('category_name'); // Nama kategori
            $table->string('created_by')->nullable(); // Pembuat kategori
            $table->string('updated_by')->nullable(); // Pengupdate kategori
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_category');
    }
}