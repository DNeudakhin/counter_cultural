<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Participant;
use App\Models\SocialMedia;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('social_medias', function (Blueprint $table) {
            $table->id();
            $table->enum(
                'name',
                SocialMedia::ENUM
            );
            $table->string('url', 255);
            $table->foreignIdFor(Participant::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_medias');
    }
};
