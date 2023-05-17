<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'orderNumber' => 'ARALM-' . Str::random(6),
            'status' => 'Paid',
            'totalCost' => 2500000,
            'car_id' => 1,
            'user_id' => 1,
        ];
    }
}
