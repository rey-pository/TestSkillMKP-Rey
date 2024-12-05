<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id('id');
            $table->string('transaction_number')->unique();
            $table->date('transaction_date')->nullable();
            $table->integer('outlet_id');
            $table->integer('users_id');
            $table->string('product_count');
            $table->string('shipping_status')->nullable();
            $table->date('shipping_date')->nullable();
            $table->string('transaction_latitude')->nullable();
            $table->string('transaction_longitude')->nullable();
            $table->string('transaction_client_name')->nullable();
            $table->decimal('total_price');
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
        Schema::dropIfExists('transaction');
    }
}