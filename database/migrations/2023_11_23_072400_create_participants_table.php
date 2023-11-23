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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('nick_name', 100)
                ->unique();
            $table->string('full_name', 100)
                ->nullable();
            $table->string('genre', 100);
            $table->string('info', 1000)
                ->nullable();
            $table->boolean('is_resident')
                ->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
