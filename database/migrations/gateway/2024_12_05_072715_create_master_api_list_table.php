<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterApiListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_api_list', function (Blueprint $table) {
            $table->id();
            $table->integer('api_group_id');
            $table->string('api_code', 255);
            $table->string('api_initial_name', 255);
            $table->string('api_method', 255);
            $table->integer('api_version');
            $table->string('api_route_host', 255);
            $table->string('api_route_url', 255);
            $table->string('auth', 255)->default('');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::table('master_api_list', function (Blueprint $table) {
            $table->foreign('api_group_id')->references('id')->on('master_api_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_api_list');
    }
}
