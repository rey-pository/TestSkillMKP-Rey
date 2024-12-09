<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDataSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_data_supplier', function (Blueprint $table) {
            $table->id(); // id (auto increment, unique)
            $table->string('supplier_code', 100); // supplier_code
            $table->string('pic_nik', 16); // pic_nik
            $table->string('pic_name', 100); // pic_name
            $table->string('pic_place_birth', 100); // pic_place_birth
            $table->date('pic_birth_date'); // pic_birth_date
            $table->char('pic_gender', 1); // pic_gender (L/P)
            $table->text('pic_address'); // pic_address
            $table->string('corp_name', 255); // corp_name
            $table->text('corp_address'); // corp_address
            $table->integer('corp_village_id'); // corp_village_id
            $table->string('supplier_brand', 255); // supplier_brand
            $table->string('status', 100); // status
            $table->text('corp_file_siup'); // corp_file_siup
            $table->text('corp_file_npwp'); // corp_file_npwp
            $table->string('pic_phone', 16); // pic_phone
            $table->string('pic_email', 100); // pic_email
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
        Schema::dropIfExists('master_data_supplier');
    }
}
