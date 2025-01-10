<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDistributorSegmentDetailUomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_distributor_segment_detail_uom', function (Blueprint $table) {
            $table->id();
            $table->integer('uom_id');
            $table->integer('product_distributor_segment_detail_id');
            $table->integer('product_price');
            $table->integer('product_discount');
            $table->boolean('is_discount_percentage');
            $table->integer('distributor_fee');
            $table->boolean('is_distributor_fee_percentage');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::table('product_distributor_segment_detail_uom', function (Blueprint $table) {
            $table->foreign('uom_id')->references('id')->on('product_supplier_uom');
            $table->foreign('product_distributor_segment_detail_id')->references('id')->on('product_distributor_segment_detail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_distributor_segment_detail_uom');
    }
}
