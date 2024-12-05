<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorRecordRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributor_record_request', function (Blueprint $table) {
            $table->id('id');
            $table->string('request_number')->unique();
            $table->integer('supplier_id');
            $table->integer('outlet_id');
            $table->string('request_status');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->string('product_status')->nullable();
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
        Schema::dropIfExists('distributor_record_request');
    }
}