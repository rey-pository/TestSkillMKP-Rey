<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantHistoryBuyingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_history_buying', function (Blueprint $table) {
            $table->id('id'); // Menggunakan id untuk primary key
            $table->string('transaction_number')->unique();
            $table->string('name');
            $table->string('supplier_name');
            $table->string('distributor_name');
            $table->text('product_description')->nullable();
            $table->date('received_date');
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
        Schema::dropIfExists('merchant_history_buying');
    }
}
