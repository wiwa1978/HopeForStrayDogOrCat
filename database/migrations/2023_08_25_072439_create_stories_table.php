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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('adopter_name');
            $table->text('description_short')->nullable();
            $table->text('description_long')->nullable();
            $table->foreignId('animal_id')->constrained('animals')->cascadeOnDelete();
            $table->string('adoption_country')->nullable();
            $table->string('photo_main')->nullable();
            $table->text('photos_additional')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
