<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductDistributorSupplierTableAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('product_distributor_supplier', function (Blueprint $table) {
            $table->string('code_index', 100)->nullable();
            $table->string('village_id', 100)->nullable();
            $table->string('district_id', 100)->nullable();
            $table->string('city_id', 100)->nullable();
            $table->string('province_id', 100)->nullable();
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
        Schema::table('product_distributor_supplier', function (Blueprint $table) {
            $table->dropColumn('code_index');
            $table->dropColumn('village_id');
            $table->dropColumn('district_id');
            $table->dropColumn('city_id');
            $table->dropColumn('province_id');
        });
    }
}
