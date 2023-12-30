<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'status' => fake()->boolean(),
            'customer_national_code' => fake()->numerify('##########'),
            'amount' => fake()->numberBetween(10000, 99999999)
        ];
    }
}
