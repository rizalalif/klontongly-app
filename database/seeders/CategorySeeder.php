<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory()->create();

        $categories = [
            [
                'name' => 'Alat Mandi',
                'slug' => 'alatmandi',
                'image' => 'alatmandi.jpg'
            ],
            [
                'name' => 'Bumbu Dapur',
                'slug' => 'bumbudapur',
                'image' => 'bumbudapur.jpg'
            ],
            [
                'name' => 'Deterjen',
                'slug' => 'deterjen',
                'image' => 'deterjen.jpg'
            ],
            [
                'name' => 'Minuman',
                'slug' => 'minuman',
                'image' => 'minuman.jpg'
            ],
            [
                'name' => 'Sembako',
                'slug' => 'sembako',
                'image' => 'telor.jpg'
            ],
            [
                'name' => 'Aneka',
                'slug' => 'aneka',
                'image' => 'aneka.jpg'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
