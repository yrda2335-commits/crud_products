<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->unique()->words(3, true),
            'product_price' => fake()->randomFloat(2, 50, 5000),
            'product_category' => fake()->randomElement([
                'Electronics',
                'Home',
                'Fashion',
                'Books',
                'Toys',
                'Sports',
            ]),
        ];
    }
}
