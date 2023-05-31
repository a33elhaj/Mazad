<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\S_Invoice>
 */
class S_InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'invoice_number' => $this->faker->unique()->postcode,
            'supplier_id' => function(){
                return Supplier::all()->random();
            },
            'invoice_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'recive_receipt_no' => $this->faker->unique()->postcode,
            'customer_id' => function(){
                return Customer::all()->random();
            },
            'product_id' => function(){
                return Product::all()->random();
            },
            'quantity' => $this->faker->numberBetween($min = 10, $max = 100),
            'vat' => $this->faker->numberBetween($min = 10, $max = 100),
            'service_percent' => $this->faker->numberBetween($min = 10, $max = 100),
            'service_amount' => $this->faker->numberBetween($min = 10, $max = 100),
            'expenses' => $this->faker->numberBetween($min = 10, $max = 100),
            'expenses_description' => $this->faker->paragraph,
            'discount' => $this->faker->numberBetween($min = 10, $max = 100),

            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime
        ];
    }
}
