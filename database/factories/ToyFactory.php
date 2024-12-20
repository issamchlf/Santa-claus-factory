<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toy>
 */
class ToyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(), 
            'description' => $this->faker->text(), 
            'image' => $this->faker->imageUrl(),
            'minimum_age_id' => $this->faker->numberBetween($min = 1, $max = 3)
        ];
    }
}
