<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(5, true),
            'description' => fake()->realTextBetween(60, 480),
            'image' => fake()->imageUrl(500, 240),
            'location' => fake()->address(),
            'cost' => random_int(1000, 5000) / 100,
            'payment_link' => fake()->url(),
            'event_date' => Carbon::create(
                random_int(2024, 2050),
                random_int(1, 12),
                random_int(1, 30),
                random_int(0, 23),
                random_int(0, 23),
            ),
        ];
    }
}
