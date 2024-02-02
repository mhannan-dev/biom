<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 5 sections
        $sections = [
            ['title' => 'Section A', 'slug' => 'section-a', 'status' => 1],
            ['title' => 'Section B', 'slug' => 'section-b', 'status' => 1],
            ['title' => 'Section C', 'slug' => 'section-c', 'status' => 1],
            ['title' => 'Section D', 'slug' => 'section-d', 'status' => 0],
            ['title' => 'Section E', 'slug' => 'section-e', 'status' => 1],
        ];

        foreach ($sections as $section) {
            DB::table('sections')->insert([
                'title' => $section['title'],
                'slug' => $section['slug'],
                'status' => $section['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
