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
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'foto' => $this->faker->imageUrl(),
            'age' => $this->faker->numberBetween(1, 20),
            'age_range' => function (array $attributes) {
                $age = $attributes['age'];
                if ($age <= 3) return '0-3';
                if ($age <= 7) return '3-7';
                if ($age <= 12) return '7-12';
                if ($age <= 16) return '12-16';
                if ($age <= 18) return '16-18';
                return '18+';
            },
            'gender' => $this->faker->randomElement($gender),
            'country' => $this->faker->randomElement($countries),
            'atitude' => $this->faker->randomElement($atitude),
        ];
    }
}
