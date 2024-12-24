<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('toko_id')->constrained(table: 'master_data_toko');
            $table->text('full_address');
            $table->integer('province_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('village_id')->nullable();
            $table->string('postal_code')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('is_main')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko_shipping_addresses');
    }
}
