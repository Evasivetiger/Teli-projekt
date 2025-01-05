<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\League>
 */
class LeagueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'primary_role' => fake()->randomElement(["Tank", "Mage", "Support", "Marksman", "Fighter", "Assassin"]),
            'secondary_role' => fake()->randomElement(["Support", "Burst", "Utility", "None", "Damage", "Control", "Stealth"]),
            'base_hp' => fake()->numberBetween(300, 600),
            'base_mana' => fake()->numberBetween(200, 500)
        ];
    }
}
