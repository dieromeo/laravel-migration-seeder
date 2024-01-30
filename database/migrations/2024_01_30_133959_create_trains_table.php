<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Agency', 40);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->date('departure_date');
            $table->time('departure_time')->nullable();
            $table->time('arrival_time')->nullable();
            $table->string('train_code', 20)->nullable();
            $table->tinyInteger('coaches_number')->nullable();
            $table->boolean('on_time')->default(1);
            $table->boolean('available')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
