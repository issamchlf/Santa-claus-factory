<?php

namespace Database\Factories;

use App\Models\MinimumAge;
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
            'minimum_age_id' => MinimumAge::inRandomOrder()->first()->id,
        ];
    }
}
