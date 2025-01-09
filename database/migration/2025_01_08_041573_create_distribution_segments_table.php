<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributionSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribution_segments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('segment_id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('distributor_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::table('distribution_segments', function (Blueprint $table) {
            $table->foreign('segment_id')->references('id')->on('segments');
            $table->foreign('supplier_id')->references('id')->on('master_data_supplier');
            $table->foreign('distributor_id')->references('id')->on('master_data_distributor');

            $table->unique(['segment_id', 'supplier_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distribution_segments');
    }
}
