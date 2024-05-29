<?php

namespace Database\Factories;

use App\Models\CoffeeProcessingMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoffeeProcessingsMethods>
 */
class CoffeeProcessingMethodFactory extends Factory
{
    protected $model = CoffeeProcessingMethod::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
