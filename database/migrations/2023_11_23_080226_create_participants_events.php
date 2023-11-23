<?php

use App\Models\Events;
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
        Schema::create('participants_events', function (Blueprint $table) {
            $table->foreignIdFor(Participants::class);
            $table->foreignIdFor(Events::class);

            $table->unique(['participants_id', 'events_id']);
            $table->foreign('participants_id', 'participants_genres_fk')
                ->on('participants')
                ->references('id')
                ->cascadeOnDelete();
            $table->foreign('events_id', 'genres_participants_fk')
                ->on('events')
                ->references('id')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_event');
    }
};
