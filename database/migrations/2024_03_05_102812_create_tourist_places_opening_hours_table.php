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
        Schema::create('tourist_places_opening_hours', function (Blueprint $table) {
            $table->id();
            $table->integer('tourist_place_id');
            $table->enum('days', ['Sunday', 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'])->nullable();
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_places_opening_hours');
    }
};
