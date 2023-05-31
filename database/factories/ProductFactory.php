<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_code' => $this->faker->unique()->postcode,
            'name' => $this->faker->word,
            'sold_quantity' => $this->faker->numberBetween($min = 10, $max = 100),
            'med_price' => $this->faker->numberBetween($min = 100, $max = 200),

            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime
        ];
    }
}
