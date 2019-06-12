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
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(Post_CategoriesTableSeeder::class);
        $this->call(commentsTableSeeder::class);
        $this->call(DislikesTableSeeder::class);

    }
}
