<?php

namespace Database\Seeders;

use DateTime;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $posts = [];
        

        for($i = 1; $i <=10; $i++){
            $image = "Post_image_" . rand(1, 5) . ".jpg";

            $posts [] = [
                'category_id' => rand(1, 3),
                'title' => $faker->sentence(rand(8, 12)),
                'excerpt' => $faker->text(rand(200, 300)),
                'body' => $faker->paragraphs(rand(10, 15), true),
                'slug' => $faker->slug(),
                'image' => rand(0, 1) == 1 ? $image : NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),

            ];
        }

        DB::table('posts')->insert($posts);
    }
}
