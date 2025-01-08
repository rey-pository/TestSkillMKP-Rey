<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCartItemsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Alter column drop foreign keys and assign to new foreign keys
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['product_segment_id']);

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_segment_id')->references('id')->on('product_segments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Reverse back the foreign keys
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['product_segment_id']);

            $table->foreign('product_id')->references('id')->on('product_supplier');
            $table->foreign('product_segment_id')->references('id')->on('product_distributor_segment_detail');
        });
    }
}
