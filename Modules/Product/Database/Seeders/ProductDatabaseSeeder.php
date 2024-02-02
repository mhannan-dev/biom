<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Database\Seeders\BrandsTableSeeder;
use Modules\Product\Database\Seeders\BannersTableSeeder;
use Modules\Product\Database\Seeders\ProductTableSeeder;
use Modules\Product\Database\Seeders\SectionsTableSeeder;
use Modules\Product\Database\Seeders\CategoriesTableSeeder;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            CategoriesTableSeeder::class,
            SectionsTableSeeder::class,
            BrandsTableSeeder::class,
            BannersTableSeeder::class,
            ProductTableSeeder::class,
        ]);
    }
}
