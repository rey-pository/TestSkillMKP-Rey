<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_segments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('segment_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('product_uom_id');
            $table->decimal('price', 10, 2);
            $table->decimal('discount_amount', 10, 2);
            $table->boolean('is_discount_percentage');
            $table->decimal('distributor_fee', 10, 2);
            $table->boolean('is_distributor_fee_percentage');
            $table->decimal('tax_rate', 5, 2);
            $table->boolean('is_tax_included');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::table('product_segments', function (Blueprint $table) {
            $table->foreign('segment_id')->references('id')->on('segments');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('product_uom_id')->references('id')->on('product_unit_of_measurements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_segments');
    }
}
