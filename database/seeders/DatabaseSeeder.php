<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PostTableSeeder;
use Database\Seeders\TagsTableSeeder;
use Database\Seeders\CategoryTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoryTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
       
        $this->call(PostTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
