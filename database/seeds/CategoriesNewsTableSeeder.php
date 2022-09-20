<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for ($i = 0; $i < 60; $i++) {
            DB::table('categories_news')->insert([
                        'category_id' => rand(1, 12),
                        'news_id' => rand(1, 60)
                ]);
        }
    }
}
