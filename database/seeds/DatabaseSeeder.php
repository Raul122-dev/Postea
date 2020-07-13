<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserCollectionSeeder::class);
        // $this->call(UsersTableSeeder::class);
        //$this->call(PostsCollectionSeeder::class);
    }
}
