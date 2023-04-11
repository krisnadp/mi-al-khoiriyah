<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' =>  $this->faker->randomElement(['ES-', 'MS-', 'HS-']).$this->faker->unique()->randomNumber(5, true),
            'name' => $this->faker->unique()->word(),
        ];
    }
}
