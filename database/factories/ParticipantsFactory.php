<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participants>
 */
class ParticipantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nick_name' => fake()->userName(),
            'full_name' => fake()->name(),
            'info' => fake()->realTextBetween(30, 1000),
            'is_resident' => fake()->boolean(25),
        ];
    }
}
