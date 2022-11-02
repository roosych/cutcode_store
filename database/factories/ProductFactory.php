<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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
            'thumbnail' => fake()->file(
                base_path('/tests/Fixtures/images/products'),
                storage_path('/app/public/images/products'),
                false
            ),
            'price' => fake()->numberBetween(1000, 9999),

            // так как сиды брендов уже будут в бд, возьмем оттуда рандомное значение по айди
            'brand_id' => Brand::query()->inRandomOrder()->value('id'),
        ];
    }
}
