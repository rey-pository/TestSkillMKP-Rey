<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDistributorSegmentDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_distributor_segment_detail', function (Blueprint $table) {
            $table->id(); // id (auto increment, unique)
            $table->integer('product_distributor_segment_id'); // product_distributor_segment_id
            $table->integer('product_supplier_id'); // product_supplier_id
            $table->integer('tax'); // tax
            $table->boolean('is_tax_include'); // is_tax_include (boolean)
            $table->integer('distributor_fee'); // distributor_fee
            $table->boolean('is_distributor_percentage'); // is_distributor_percentage (boolean)
            $table->integer('product_price'); // product_price
            $table->integer('product_discount'); // product_discount
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
        Schema::dropIfExists('product_distributor_segment_detail');
    }
}
