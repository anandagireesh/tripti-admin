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
        Schema::create('tourist_places_gallery', function (Blueprint $table) {
            $table->id();
            $table->integer('tourist_place_id');
            $table->enum('file_type', ['Image', 'Video'])->nullable();
            $table->string('path')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_places_gallery');
    }
};
