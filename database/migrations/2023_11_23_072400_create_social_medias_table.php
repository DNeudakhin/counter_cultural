<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Participants;
use App\Models\SocialMedias;

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
                SocialMedias::ENUM
            );
            $table->string('url', 255);
            $table->foreignIdFor(Participants::class);

            $table->unique(['name', 'participants_id']);
            $table->foreign('participants_id')
                ->on('participants')
                ->references('id')
                ->cascadeOnDelete();
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
