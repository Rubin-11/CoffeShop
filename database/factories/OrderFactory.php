<?php

namespace Database\Factories;


use App\Models\Order;
use App\Models\User;
use App\Models\Address;
use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'total' => $this->faker->randomFloat(2, 20, 200),
            'status' => 'pending',
            'address_id' => Address::factory(),
            'delivery_id' => Delivery::factory(),
        ];
    }
}
