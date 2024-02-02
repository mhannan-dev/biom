<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 5 categories
        $categories = [
            [
                'parent_id' => null,
                'section_id' => 1,  // Assuming section with ID 1 exists
                'title' => 'Category A',
                'slug' => 'category-a',
                'image' => 'category_image_a.jpg',
                'discount_amt' => 5.00,
                'description' => 'Category A description.',
                'meta_title' => 'Meta Title A',
                'meta_description' => 'Meta Description A',
                'status' => 1,
            ],
            [
                'parent_id' => null,
                'section_id' => 2,  // Assuming section with ID 2 exists
                'title' => 'Category B',
                'slug' => 'category-b',
                'image' => 'category_image_b.jpg',
                'discount_amt' => 3.50,
                'description' => 'Category B description.',
                'meta_title' => 'Meta Title B',
                'meta_description' => 'Meta Description B',
                'status' => 1,
            ],
            [
                'parent_id' => null,
                'section_id' => 1,  // Assuming section with ID 1 exists
                'title' => 'Category C',
                'slug' => 'category-c',
                'image' => 'category_image_c.jpg',
                'discount_amt' => 7.00,
                'description' => 'Category C description.',
                'meta_title' => 'Meta Title C',
                'meta_description' => 'Meta Description C',
                'status' => 1,
            ],
            [
                'parent_id' => null,
                'section_id' => 2,  // Assuming section with ID 2 exists
                'title' => 'Category D',
                'slug' => 'category-d',
                'image' => 'category_image_d.jpg',
                'discount_amt' => 4.50,
                'description' => 'Category D description.',
                'meta_title' => 'Meta Title D',
                'meta_description' => 'Meta Description D',
                'status' => 1,
            ],
            [
                'parent_id' => null,
                'section_id' => 1,  // Assuming section with ID 1 exists
                'title' => 'Category E',
                'slug' => 'category-e',
                'image' => 'category_image_e.jpg',
                'discount_amt' => 6.00,
                'description' => 'Category E description.',
                'meta_title' => 'Meta Title E',
                'meta_description' => 'Meta Description E',
                'status' => 1,
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'parent_id' => $category['parent_id'],
                'section_id' => $category['section_id'],
                'title' => $category['title'],
                'slug' => $category['slug'],
                'image' => $category['image'],
                'discount_amt' => $category['discount_amt'],
                'description' => $category['description'],
                'meta_title' => $category['meta_title'],
                'meta_description' => $category['meta_description'],
                'status' => $category['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
