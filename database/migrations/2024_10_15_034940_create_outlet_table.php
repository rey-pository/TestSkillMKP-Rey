<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutletTable extends Migration
{
    public function up()
    {
        Schema::create('outlet', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('email')->nullable();
            $table->string('province')->nullable();
            $table->string('regency_city')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('urban_village')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('village')->nullable();
            $table->string('outlet_phone')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longtitude')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('outlet');
    }
}