<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'img' => 'https://m.media-amazon.com/images/I/71w+qQy9sL._AC_UL320_.jpg',
            'brand' => 'Nike',
            'title' => 'Nike Air Max 270',
            'rating' => 4.5,
            'reviews' => 1200,
            'sellPrice' => 150.00,
            'mrp' => 200.00,
            'discount' => 25,
            'category' => 'Men'
        ],
        [
            'img' => 'https://m.media-amazon.com/images/I/71w+qQy9sL._AC_UL320_.jpg',
            'brand' => 'Adidas',
            'title' => 'Adidas Ultraboost 21',
            'rating' => 4.7,
            'reviews' => 1500,
            'sellPrice' => 180.00,
            'mrp' => 220.00,
            'discount' => 18,
            'category' => 'Men'
        ]);
    }
}
