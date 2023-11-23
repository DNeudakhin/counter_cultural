<?php

use App\Models\Event;
use App\Models\Participant;
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
        Schema::create('participant_event', function (Blueprint $table) {
            $table->foreignIdFor(Participant::class);
            $table->foreignIdFor(Event::class);
            $table->unique(['participant_id', 'event_id']);
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
