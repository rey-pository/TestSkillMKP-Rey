<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductDistributorSegmentDetailTableDropColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('product_distributor_segment_detail', function (Blueprint $table) {
            $table->dropColumn('distributor_fee');
            $table->dropColumn('is_distributor_percentage');
            $table->dropColumn('product_price');
            $table->dropColumn('product_discount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('product_distributor_segment_detail', function (Blueprint $table) {
            $table->integer('distributor_fee'); // distributor_fee
            $table->boolean('is_distributor_percentage'); // is_distributor_percentage (boolean)
            $table->integer('product_price'); // product_price
            $table->integer('product_discount');
        });
    }
}
