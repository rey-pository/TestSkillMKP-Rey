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
            $table->foreignId('api_group_id')->constrained(table: 'master_api_group');
            $table->string('api_code', length: 255);
            $table->string('api_initial_name', length: 255);
            $table->string('api_method', length: 255);
            $table->integer('api_version');
            $table->string('api_route_host', length: 255);
            $table->string('api_route_url', length: 255);
            $table->string('auth', length: 255)->default('');
            $table->boolean('is_active');
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
        Schema::dropIfExists('master_api_list');
    }
}
