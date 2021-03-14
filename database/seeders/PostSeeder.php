<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++){
        DB::table('posts')->insert([
            'category_id' => rand(0, 4),
            'title' => 'Post' . $i,
            'description' => 'Description' . $i,
            'text' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam cumque unde blanditiis doloremque sequi, recusandae tenetur consectetur fugit dolor consequatur est saepe sed non voluptas! Neque, perspiciatis? Delectus, voluptatem consequuntur!",
            'slug' => 'post-'. $i
        ]);
    }}
}
