<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedule_id')->constrained('schedules')->onDelete('cascade');
            $table->string('seat_number', 10);
            $table->enum('status', ['available', 'locked', 'booked'])->default('available');
            $table->timestamp('locked_until')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
            $table->unique(['schedule_id', 'seat_number']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('seats');
    }
};
