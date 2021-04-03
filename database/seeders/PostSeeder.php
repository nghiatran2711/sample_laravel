<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get data of table categories
        $categories = DB::table('categories')->get();
        if (!empty($categories)) {
            $date = date('Y-m-d H:i:s');
            foreach ($categories as $category) {
                $dataInsert = [
                    'post_name' => Str::random(40),
                    'post_content' => Str::random(1000),
                    'category_id' => $category->id,
                    'created_at' => $date,
                    'updated_at' => $date,
                ];
                DB::table('posts')->insert($dataInsert);
            }
        }
    }
}
