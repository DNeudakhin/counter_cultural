<?php

use App\Models\Genres;
use App\Models\Participants;
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
        Schema::create('participants_genres', function (Blueprint $table) {
            $table->foreignIdFor(Participants::class);
            $table->foreignIdFor(Genres::class);

            $table->unique(['participants_id', 'genres_id']);
            $table->foreign('participants_id')
                ->on('participants')
                ->references('id')
                ->cascadeOnDelete();
            $table->foreign('genres_id')
                ->on('genres')
                ->references('id')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_genre');
    }
};
