<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Sample data for products
        $products = [
            [
                'name' => 'Casual Dress',
                'category_id' => 1, // Assuming 'Dresses' category ID is 3
                'price' => 49.99,
                'description' => 'A casual dress suitable for everyday wear.',
                'status' => 1, // 1 for available, 0 for out of stock, etc.
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'slug' => Str::slug("Casual Dress")
            ],
            [
                'name' => 'Leather Jacket',
                'category_id' => 1, // Assuming 'Jackets' category ID is 4
                'price' => 89.99,
                'description' => 'A stylish leather jacket to keep you warm in style.',
                'status' => 1,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'slug' => Str::slug("Leather Jacket")
            ],
            [
                'name' => 'Denim Skirt',
                'category_id' => 1, // Assuming 'Skirts' category ID is 5
                'price' => 29.99,
                'description' => 'A trendy denim skirt for a fashionable look.',
                'status' => 1,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'slug' => Str::slug("Denim Skirt")
            ],
            [
                'name' => 'Striped Sweater',
                'category_id' => 2, // Assuming 'Sweaters' category ID is 6
                'price' => 34.99,
                'description' => 'A cozy sweater with stylish stripes.',
                'status' => 1,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'slug' => Str::slug("Striped Sweater")
            ],
            [
                'name' => 'Cargo Shorts',
                'category_id' => 2, // Assuming 'Shorts' category ID is 7
                'price' => 24.99,
                'description' => 'Comfortable cargo shorts for outdoor activities.',
                'status' => 1,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'slug' => Str::slug("Cargo Shorts")
            ],
            [
                'name' => 'Silk Blouse',
                'category_id' => 2, // Assuming 'Blouses' category ID is 8
                'price' => 54.99,
                'description' => 'An elegant silk blouse for a sophisticated look.',
                'status' => 1,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'slug' => Str::slug("Silk Blouse")
            ],

            [
                'name' => 'Sac Tote En Cuir',
                'category_id' => 2, // Assuming 'Blouses' category ID is 8
                'price' => 54.99,
                'description' => 'An elegant silk blouse for a sophisticated look.',
                'status' => 1,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'slug' => Str::slug("Silk Blouse")
            ],
            // Add more product data as needed
        ];

        // Inserting data into the table
        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }


        // Product Images
        $images = [
            [
                'path' => 'products/img-1.webp',
                'product_id' => 1, // Assuming product ID is 1
            ],
            [
                'path' => 'products/img-2.webp',
                'product_id' => 1,
            ],
            [
                'path' => 'products/img-3.webp',
                'product_id' => 1, // Assuming product ID is 2
            ],
            [
                'path' => 'products/img-4.webp',
                'product_id' => 1,
            ],
            [
                'path' => 'products/img-5.webp',
                'product_id' => 2, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-6.webp',
                'product_id' => 2,
            ],
            [
                'path' => 'products/img-7.webp',
                'product_id' => 2, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-8.webp',
                'product_id' => 2,
            ],

            [
                'path' => 'products/img-9.webp',
                'product_id' => 3, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-10.webp',
                'product_id' => 3,
            ],
            [
                'path' => 'products/img-11.webp',
                'product_id' => 3, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-12.webp',
                'product_id' => 3,
            ],


            [
                'path' => 'products/img-13.webp',
                'product_id' => 4, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-14.webp',
                'product_id' => 4,
            ],
            [
                'path' => 'products/img-15.webp',
                'product_id' => 4, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-16.webp',
                'product_id' => 4,
            ],

            [
                'path' => 'products/img-17.webp',
                'product_id' => 5, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-18.webp',
                'product_id' => 5,
            ],
            [
                'path' => 'products/img-19.webp',
                'product_id' => 5, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-20.webp',
                'product_id' => 5,
            ],

            [
                'path' => 'products/img-21.webp',
                'product_id' => 6, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-22.webp',
                'product_id' => 6,
            ],
            [
                'path' => 'products/img-23.webp',
                'product_id' => 6, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-24.webp',
                'product_id' => 6,
            ],


            [
                'path' => 'products/img-25.jpg',
                'product_id' => 7, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-26.jpg',
                'product_id' => 7,
            ],
            [
                'path' => 'products/img-27.jpg',
                'product_id' => 7, // Assuming product ID is 3
            ],
            [
                'path' => 'products/img-28.jpg',
                'product_id' => 7,
            ],
        ];

        // Inserting data into the table
        foreach ($images as $image) {
            DB::table('images')->insert($image);
        }







    }
}
