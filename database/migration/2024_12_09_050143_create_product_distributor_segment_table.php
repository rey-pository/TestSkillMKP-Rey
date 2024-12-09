<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDistributorSegmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_distributor_segment', function (Blueprint $table) {
            $table->id(); // id (auto increment, unique)
            $table->string('segment_code', 100); // segment_code
            $table->string('segment_name', 255); // segment_name
            $table->integer('supplier_id'); // supplier_id
            $table->string('segment_code_index', 255)->unique(); // segment_code_index (unique)
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_distributor_segment');
    }
}
