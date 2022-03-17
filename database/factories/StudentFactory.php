<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Technician;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nickname' => $this->faker->name(),
            'avatar' => 'https://loremflickr.com/320/240',
            'user_id' => User::select('id')->orderByRaw("RAND()")->first()->id,
            'technician_id' => Technician::select('id')->orderByRaw("RAND()")->first()->id,
        ];
    }
}
