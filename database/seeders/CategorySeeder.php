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
        $data=[
            ['category_name'=>'PHP'],
            ['category_name'=>'CSS'],
            ['category_name'=>'JS'],
            ['category_name'=>'SQL'],
            ['category_name'=>'HTML']
        ];
        DB::table('categories')->insert($data);
    }
}
