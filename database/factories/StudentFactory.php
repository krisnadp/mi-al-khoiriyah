<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id' => $this->faker->randomDigitNotNull(),
            'classroom_id' => $this->faker->randomDigitNotNull(),
            'birthplace' => $this->faker->city(),
            'birthdate' => $this->faker->date(),
            'gender' => $this->faker->word(),
            'status' => $this->faker->word(),
            'child_no' => $this->faker->randomDigitNotNull(),
            'siblings' => $this->faker->randomDigitNotNull(),
            'kk' => $this->faker->randomNumber(9, true),
            'nisn' => $this->faker->randomNumber(9, true),
            'nis' => $this->faker->randomNumber(8, true),
            'address' => $this->faker->address(),
            'address_no' => $this->faker->randomDigitNotNull(),
            'address_rt' => $this->faker->randomDigitNotNull(),
            'address_rw' => $this->faker->randomDigitNotNull(),
            'kelurahan' => $this->faker->word(),
            'kecamatan' => $this->faker->word(),
            'city' => $this->faker->city(),
            'pos_code' => $this->faker->randomNumber(5, true),
            'from_school' => $this->faker->words(2, true),
            'from_school_address' => $this->faker->address(),
            'from_school_level' => $this->faker->word(),
            'uniform_size' => $this->faker->word(),
            'father_name' => $this->faker->name(),
            'father_nik' => $this->faker->randomNumber(9, true),
            'father_birthplace' => $this->faker->city(),
            'father_birthdate' => $this->faker->date(),
            'father_education' => $this->faker->words(2, true),
            'father_job' => $this->faker->words(2, true),
            'father_income' => $this->faker->randomNumber(6, true),
            'mother_name' => $this->faker->name(),
            'mother_nik' => $this->faker->randomNumber(9, true),
            'mother_birthplace' => $this->faker->city(),
            'mother_birthdate' => $this->faker->date(),
            'mother_education' => $this->faker->words(2, true),
            'mother_job' => $this->faker->words(2, true),
            'mother_income' => $this->faker->randomNumber(6, true),
            'phone_number' => $this->faker->randomNumber(9, true),
            'wali_name' => $this->faker->name(),
            'wali_nik' => $this->faker->randomNumber(9, true),
            'wali_birthplace' => $this->faker->city(),
            'wali_birthdate' => $this->faker->date(),
            'wali_education' => $this->faker->words(2, true),
            'wali_job' => $this->faker->words(2, true),
            'wali_income' => $this->faker->randomNumber(6, true),
            'wali_income' => $this->faker->randomNumber(9, true),
        ];
    }
}
