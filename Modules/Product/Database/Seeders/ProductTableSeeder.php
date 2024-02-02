<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Product\Entities\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'title' => "Product $i",
                'slug' => "product-$i",
                'code' => "CODE-$i",
                'price' => rand(10, 100),
                'discount_amt' => rand(1, 10),
                'image' => "product-image-$i.jpg",
                'meta_title' => "Product $i Meta Title",
                'description' => "Description for Product $i",
                'meta_description' => "Meta description for Product $i",
                'meta_keyword' => "keyword$i, keyword".($i+1),
                'is_featured' => ($i % 2 == 0) ? 'Yes' : 'No',
                'status' => ($i % 2 == 0) ? 1 : 0,
                'section_id' => rand(1, 5), 
                'brand_id' => rand(1, 10), 
                'category_id' => rand(1, 5)
            ]);
        }
    }
}
