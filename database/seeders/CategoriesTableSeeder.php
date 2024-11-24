<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $categories = [
        ['cname' => 'page', 'price' => 850],
        ['cname' => 'nobleman', 'price' => 950],
        ['cname' => 'king', 'price' => 1250],
        ['cname' => 'knight', 'price' => 1150],
    ];

    DB::table('categorY')->insert($categories);
    }
}
