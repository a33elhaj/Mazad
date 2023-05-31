<?php

namespace Database\Factories;

use App\Models\almuaref;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_code' => $this->faker->unique()->postcode,
            'name' => $this->faker->word,
            'phone' => $this->faker->e164PhoneNumber,
            'reg_number' => $this->faker->randomNumber,
            'vat_number' => $this->faker->randomNumber,
            'address' => $this->faker->address,
            'quantity' => $this->faker->numberBetween($min = 10, $max = 100),
            'almuaref_name' => $this->faker->name('male'|'female'),
            'almuaref_phone' => $this->faker->e164PhoneNumber,

            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime
        ];
    }
}
