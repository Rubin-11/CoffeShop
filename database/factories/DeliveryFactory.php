<?php

namespace Database\Factories;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DeliveryFactory extends Factory
{
    protected $model = Delivery::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'method' => $this->faker->randomElement(['Standard', 'Express', 'Overnight']),
            'cost' => $this->faker->randomFloat(2, 5, 50),
        ];
    }
}
