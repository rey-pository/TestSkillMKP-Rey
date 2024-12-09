<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_supplier', function (Blueprint $table) {
            $table->id(); // id (auto increment, unique)
            $table->string('product_code', 100); // product_code
            $table->string('product_code_index', 255)->unique(); // product_code_index (unique)
            $table->string('product_name', 255); // product_name
            $table->text('product_barcode'); // product_barcode
            $table->string('product_status', 100); // product_status
            $table->integer('product_stock'); // product_stock
            $table->string('product_unit', 100); // product_unit
            $table->integer('product_category_id'); // product_category_id
            $table->integer('product_price'); // product_price
            $table->integer('product_bottom_price'); // product_bottom_price
            $table->text('product_description'); // product_description
            $table->text('product_content'); // product_content
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
        Schema::dropIfExists('product_supplier');
    }
}
