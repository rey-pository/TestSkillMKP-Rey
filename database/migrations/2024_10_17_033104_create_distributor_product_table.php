<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributor_product', function (Blueprint $table) {
            $table->id('id');
            $table->integer('supplier_id');
            $table->integer('id_outlet');
            $table->string('name');
            $table->string('status');
            $table->integer('stock');
            $table->integer('quantity_per_unit');
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributor_product');
    }
}