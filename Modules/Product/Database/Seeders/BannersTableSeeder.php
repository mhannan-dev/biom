<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 5 banners
        $banners = [
            [
                'title' => 'Banner 1',
                'slug' => 'banner-1',
                'status' => 1,
                'image' => 'banner_image_1.jpg',
            ],
            [
                'title' => 'Banner 2',
                'slug' => 'banner-2',
                'status' => 1,
                'image' => 'banner_image_2.jpg',
            ],
            [
                'title' => 'Banner 3',
                'slug' => 'banner-3',
                'status' => 0,
                'image' => 'banner_image_3.jpg',
            ],
            [
                'title' => 'Banner 4',
                'slug' => 'banner-4',
                'status' => 1,
                'image' => 'banner_image_4.jpg',
            ],
            [
                'title' => 'Banner 5',
                'slug' => 'banner-5',
                'status' => 1,
                'image' => 'banner_image_5.jpg',
            ],
        ];

        foreach ($banners as $banner) {
            DB::table('banners')->insert([
                'title' => $banner['title'],
                'slug' => $banner['slug'],
                'status' => $banner['status'],
                'image' => $banner['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
