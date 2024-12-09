<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogProductStockSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_product_stock_supplier', function (Blueprint $table) {
            $table->id(); // id (auto increment, unique)
            $table->integer('product_id'); // product_id
            $table->string('action_type', 100); // action_type
            $table->string('remarks', 255); // remarks
            $table->integer('last_stock'); // last_stock
            $table->integer('stock'); // stock
            $table->integer('current_stock'); // current_stock
            $table->string('updated_by'); // updated_by
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
        Schema::dropIfExists('log_product_stock_supplier');
    }
}
