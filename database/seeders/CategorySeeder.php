<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Head',
                'image_url' => '/assets/images/head.png',
                'subcategories' => [
                    'Sunglasses',
                    'Buff',
                    'Sun Hat',
                ]
            ],
            [
                'name' => 'Upper Body',
                'image_url' => '/assets/images/upperbody.png',
                'subcategories' => [
                    'Hardshell Jacket',
                    'Softshell Jacket'
                ]
            ],
            [
                'name' => 'Lower Body',
                'image_url' => '/assets/images/lowerbody.png',
                'subcategories' => [
                    'Hardshell Pants',
                    'Softshell Pants',
                    'Insulated Pants',
                    'Baselayer Bottom',
                    'Socks',
                    'Socks and Stockings',
                ]
            ],
            [
                'name' => 'Technical',
                'image_url' => '/assets/images/technical.png',
                'subcategories' => [
                    'Kite',
                    'Kite Bar',
                    'Trapes',
                ]
            ],
            [
                'name' => 'Storage',
                'image_url' => '/assets/images/storage.png',
                'subcategories' => [
                    'Bag',
                    'Travel Bag',
                    'Hydration Pack',
                    'Dry Bag'
                ]
            ],
            [
                'name' => 'Electronics',
                'image_url' => '/assets/images/electronics.png',
                'subcategories' => [
                    'Headlamp',
                    'GPS',
                    'Camera',
                    'Battery',
                ]
            ]
        ];

        foreach ($categories as $categoryData) {
            $category = Category::create([
                'name' => $categoryData['name'],
                'image_url' => env('APP_URL'). $categoryData['image_url'],
            ]);

            foreach ($categoryData['subcategories'] as $subcategoryName ) {
                Subcategory::create([
                    'name' => $subcategoryName,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
