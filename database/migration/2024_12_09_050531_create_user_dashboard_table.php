<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDashboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dashboard', function (Blueprint $table) {
            $table->id(); // id (auto increment, unique)
            $table->string('name'); // name
            $table->string('username'); // username
            $table->string('password'); // password
            $table->string('email'); // email
            $table->string('user_phone'); // user_phone
            $table->timestamps(); // created_at & updated_at
            $table->integer('segment_service_id'); // segment_service_id
            $table->string('level_code', 100); // level_code
            $table->string('level_id'); // level_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_dashboard');
    }
}
