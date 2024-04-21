<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'T-shirts',
                'image' => 'tshirts.jpg',
                'description' => 'Browse our collection of stylish t-shirts for men and women.',
            ],
            [
                'name' => 'Jeans',
                'image' => 'jeans.jpg',
                'description' => 'Discover our range of comfortable and trendy jeans for all occasions.',
            ],
            [
                'name' => 'Dresses',
                'image' => 'dresses.jpg',
                'description' => 'Explore our selection of elegant dresses for any event or everyday wear.',
            ],
            [
                'name' => 'Jackets',
                'image' => 'jackets.jpg',
                'description' => 'Stay warm and stylish with our collection of jackets for all seasons.',
            ],
            [
                'name' => 'Skirts',
                'image' => 'skirts.jpg',
                'description' => 'Find your perfect skirt from our range of stylish designs.',
            ],
            [
                'name' => 'Sweaters',
                'image' => 'sweaters.jpg',
                'description' => 'Stay cozy with our selection of comfortable and fashionable sweaters.',
            ],
            [
                'name' => 'Shorts',
                'image' => 'shorts.jpg',
                'description' => 'Enjoy the warm weather with our range of stylish shorts.',
            ],
            [
                'name' => 'Blouses',
                'image' => 'blouses.jpg',
                'description' => 'Shop our collection of elegant blouses suitable for any occasion.',
            ],
            // Add more categories as needed
        ];

        // Inserting data into the table
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
