<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class KidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $countries = ["Spain", "Morocco", "United States", "France", "Mexico", "Japan", "Brazil", "India", "Canada", "Germany"];
        $gender = ['boy', 'girl'];
        $atitude = ['good', 'bad'];
        $range = ['0-3', '3-7', '7-12', '12-16', '16-18', '18+'];
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'foto' => $this->faker->imageUrl(),
            'age' => $this->faker->numberBetween(1, 20),
            'age range' => $this->faker->randomElement($range),
            'gender' => $this->faker->randomElement($gender),
            'country' => $this->faker->randomElement($countries),
            'atitude' => $this->faker->randomElement($atitude),
        ];
    }
}
