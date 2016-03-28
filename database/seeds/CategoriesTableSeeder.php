<?php

use Illuminate\Database\Seeder;

use CodeCommerce\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        factory('CodeCommerce\Category', 10)->create();

    }
}
