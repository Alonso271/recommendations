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
        Schema::create('genre_videogame', function (Blueprint $table) {
            $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade');
            $table->foreignId('videogame_id')->constrained('videogames')->onDelete('cascade');

            $table->primary(['genre_id', 'videogame_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_videogame');
    }
};
