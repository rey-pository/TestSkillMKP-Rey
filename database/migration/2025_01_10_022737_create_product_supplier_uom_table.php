<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSupplierUomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_supplier_uom', function (Blueprint $table) {
            $table->id();
            $table->string('uom_code');
            $table->string('uom_name');
            $table->integer('product_supplier_id');
            $table->integer('convert');
            $table->boolean('is_available');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::table('product_supplier_uom', function (Blueprint $table) {
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
        Schema::dropIfExists('product_supplier_uom');
    }
}
