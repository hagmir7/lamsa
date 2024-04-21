<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $colors = [
            ['name' => 'Red', 'code' => '#FF0000'],
            ['name' => 'Green', 'code' => '#00FF00'],
            ['name' => 'Blue', 'code' => '#0000FF'],
            ['name' => 'Yellow', 'code' => '#FFFF00'],
            ['name' => 'Orange', 'code' => '#FFA500'],
            ['name' => 'Purple', 'code' => '#800080'],
            ['name' => 'Pink', 'code' => '#FFC0CB'],
            ['name' => 'Black', 'code' => '#000000'],
            ['name' => 'White', 'code' => '#FFFFFF'],
            ['name' => 'Gray', 'code' => '#808080'],
            ['name' => 'Brown', 'code' => '#A52A2A'],
            ['name' => 'Cyan', 'code' => '#00FFFF'],
            ['name' => 'Magenta', 'code' => '#FF00FF'],
            ['name' => 'Lime', 'code' => '#00FF00'],
            ['name' => 'Teal', 'code' => '#008080'],
            ['name' => 'Indigo', 'code' => '#4B0082'],
            ['name' => 'Maroon', 'code' => '#800000'],
            ['name' => 'Navy', 'code' => '#000080'],
            ['name' => 'Olive', 'code' => '#808000'],
            ['name' => 'Silver', 'code' => '#C0C0C0'],
        ];

        // Inserting data into the table
        foreach ($colors as $color) {
            DB::table('colors')->insert($color);
        }
    }
}
