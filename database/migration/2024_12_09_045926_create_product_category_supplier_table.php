<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategorySupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category_supplier', function (Blueprint $table) {
            $table->id(); // id (auto increment, unique)
            $table->string('category_code', 100); // category_code
            $table->string('category_code_index', 255)->unique(); // category_code_index (unique)
            $table->string('category_name', 100); // category_name
            $table->integer('supplier_id'); // supplier_id
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_category_supplier');
    }
}
