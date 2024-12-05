<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->id('id');
            $table->integer('transaction_id');
            $table->string('transaction_number');
            $table->integer('product_id');
            $table->integer('product_code');
            $table->string('product_name');
            $table->integer('quantity');
            $table->string('unit_type');
            $table->decimal('unit_price');
            $table->decimal('buying_price');
            $table->decimal('discount')->nullable();
            $table->decimal('tax_amount')->nullable();
            $table->decimal('subtotal_price');
            $table->string('transaction_status');
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
        Schema::dropIfExists('transaction_detail');
    }
}