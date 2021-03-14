<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 4; $i++){
        DB::table('categories')->insert([
            'title' => 'Category' .$i,
            'slug' => 'category-' . $i,
        ]);
    }}
}
