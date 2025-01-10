<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDistributorStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_distributor_stock', function (Blueprint $table) {
            $table->id();
            $table->integer('distributor_id');
            $table->integer('product_supplier_id');
            $table->integer('product_stock');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::table('product_distributor_stock', function (Blueprint $table) {
            $table->foreign('distributor_id')->references('id')->on('master_data_distributor');
            $table->foreign('product_supplier_id')->references('id')->on('product_supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_distributor_stock');
    }
}
