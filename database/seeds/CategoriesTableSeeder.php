<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $categories =
    [
        ['title' => 'Main'],
        ['title' => 'Politics'],
        ['title' => 'Economics'],
        ['title' => 'Incidents'],
        ['title' => 'Society'],
        ['title' => 'Technology'],
        ['title' => 'Science'],
        ['title' => 'Automobiles'],
        ['title' => 'Sports'],
        ['title' => 'Health'],
        ['title' => 'Show-вusiness'],
        ['title' => 'Entertainment']
    ];

    public function run()
    {
        DB::table('categories')->insert($this->categories);
    }
}
