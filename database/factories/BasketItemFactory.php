<?php

namespace Database\Factories;

use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BasketItemFactory extends Factory
{
    protected $model = BasketItem::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'basket_id' => Basket::factory(),
            'product_id' => random_int(1, 73),
            'quantity' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
