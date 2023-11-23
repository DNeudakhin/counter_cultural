<?php

namespace Database\Seeders;

use App\Models\Events;
use App\Models\Genres;
use App\Models\Participants;
use App\Models\SocialMedias;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participants::factory()
            ->count(5)
            ->has(
                SocialMedias::factory()
                    ->count(1),
                'socialMedias'
            )->has(
                Genres::factory()
                    ->count(random_int(2,5))
            )->has(
                Events::factory()
                    ->count(random_int(1,3))
            )->create();
    }
}
