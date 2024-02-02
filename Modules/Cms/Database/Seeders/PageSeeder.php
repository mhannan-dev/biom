<?php

namespace Modules\Cms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PageSeeder extends Seeder
{
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'About',
                'slug' => 'slug-1',
                'meta_title' => 'Meta Title 1',
                'meta_tags' => 'Tag 1, Tag 2',
                'meta_description' => 'Meta Description 1',
                'description' => 'Description 1',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'slug-2',
                'meta_title' => 'Meta Title 2',
                'meta_tags' => 'Tag 3, Tag 4',
                'meta_description' => 'Meta Description 2',
                'description' => 'Description 2',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
