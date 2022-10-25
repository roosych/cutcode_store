<?php

namespace Database\Factories;

use App\Models\Brand;
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
            'title' => ucfirst(fake()->words('2', true)),
            'thumbnail' => '',
            'price' => fake()->numberBetween(1000, 9999),

            // так как сиды брендов уже будут в бд, возьмем оттуда рандомное значение по айди
            'brand_id' => Brand::query()->inRandomOrder()->value('id'),
        ];
    }
}
