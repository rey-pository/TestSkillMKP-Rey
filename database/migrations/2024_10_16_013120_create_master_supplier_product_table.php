<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterSupplierProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_supplier_product', function (Blueprint $table) {
            $table->id('id');
            $table->string('product_code')->unique();
            $table->string('name');
            $table->string('status');
            $table->integer('stock');
            $table->integer('quantityperunit');
            $table->integer('unitprice');
            $table->decimal('sharing_fee', 10, 2);
            $table->text('description')->nullable();
            $table->integer('product_category_id');
            $table->integer('supplier_id');
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
        Schema::dropIfExists('master_supplier_product');
    }
}