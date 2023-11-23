<?php

namespace Database\Factories;

use App\Models\SocialMedias;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialMedias>
 */
class SocialMediasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $enum = SocialMedias::ENUM;

        return [
            'name' => $enum[random_int(0, count($enum) - 1)],
            'url' => fake()->url(),
        ];
    }
}
