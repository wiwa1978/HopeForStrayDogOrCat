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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('status');
            $table->string('size')->nullable();
            $table->text('description')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('type');
            $table->boolean('chipped')->nullable();
            $table->boolean('vaccinated')->nullable();
            $table->boolean('rabies')->nullable();
            $table->string('kids_friendly')->nullable();
            $table->string('cats_friendly')->nullable();
            $table->string('dogs_friendly')->nullable();
            $table->string('sterilized')->nullable();
            $table->text('environment')->nullable();
            $table->string('photo_main')->nullable();
            $table->text('photos_additional')->nullable();
            $table->text('videos')->nullable();
            $table->text('youtube_links')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
