<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Building>
 */
class BuildingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'bedroom' => $this->faker->randomDigitNotNull(),
            'bathroom' => $this->faker->randomDigitNotNull(),
            'storey' => $this->faker->randomDigitNotNull(),
            'garage' => $this->faker->randomDigitNotNull(),
            'price' => $this->faker->randomFloat(),
        ];
    }
}
