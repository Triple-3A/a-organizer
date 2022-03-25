<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Title>
 */
class TitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Comer', 'Higiene', 'Vestirse', 'Baño']),
            'type' => $this->faker->randomElement(['básicos', 'instrumentales', 'educación', 'trabajo', 'juego']),
        ];
    }
}
