<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
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
                    'name' => Str::random(20),
                    'description'=>Str::random(40),
                    'image'=>'image.jpg',
                    'category_id' => $category->id,
                    'created_at' => $date,
                    'updated_at' => $date,
                ];
                DB::table('products')->insert($dataInsert);
            }
        }
    }
}
