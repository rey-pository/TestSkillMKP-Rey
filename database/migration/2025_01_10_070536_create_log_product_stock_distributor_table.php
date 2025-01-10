<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogProductStockDistributorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_product_stock_distributor', function (Blueprint $table) {
            $table->id();
            $table->integer('distributor_id'); // product_id
            $table->integer('product_supplier_id'); // product_id
            $table->string('action_type', 100); // action_type
            $table->string('remarks', 255); // remarks
            $table->integer('last_stock'); // last_stock
            $table->integer('stock'); // stock
            $table->integer('current_stock'); // current_stock
            $table->string('reference_id', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->string('updated_by'); // updated_by
        });

        Schema::table('log_product_stock_distributor', function (Blueprint $table) {
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
        Schema::dropIfExists('log_product_stock_distributor');
    }
}
