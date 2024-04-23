<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [

            [
                'name' => 'Sweaters',
                'image' => '/products/up.png',
                'slug' => Str::slug("Sweaters"),
                'description' => 'Stay cozy with our selection of comfortable and fashionable sweaters.',
            ],
            [
                'name' => 'Culotte',
                'image' => '/products/down.png',
                'slug' => Str::slug("Shorts"),
                'description' => 'Enjoy the warm weather with our range of stylish shorts.',
            ],
            [
                'name' => 'Sacs',
                'image' => '/products/bag.png',
                'slug' => Str::slug("Blouses"),
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
