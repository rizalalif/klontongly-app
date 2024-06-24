<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

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
    // protected $model = Product::class;
    public function definition(): array
    {
        $categories = Category::all();
        $path = public_path('assets\images\products');
        $images = File::allFiles($path);
        $randomImage = $images[array_rand($images)];
        return [
            'name' => fake()->word(),
            'category_id' => $categories->random()->id,
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(3),
            'stok' => fake()->randomDigit(),
            'image' => $randomImage->getFilename(),
        ];
    }
}
