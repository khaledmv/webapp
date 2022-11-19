<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
             'title' => 'web design',
             'slug' => 'web-design',
             
            ],
            [
             'title' => 'graphic design',
             'slug' => 'graphic-design',
             
            ],
            [
             'title' => 'ui design',
             'slug' => 'ui-design',
             
            ],
            [
             'title' => 'ux design',
             'slug' => 'ux-design',
             
            ],
 
           
 
         ]);
    }
}
