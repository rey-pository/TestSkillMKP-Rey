<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDistributorSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_distributor_supplier', function (Blueprint $table) {
            $table->id(); // id (auto increment, unique)
            $table->integer('distributor_id'); // distributor_id
            $table->integer('product_distributor_segment_id'); // product_distributor_segment_id
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
        Schema::dropIfExists('product_distributor_supplier');
    }
}
