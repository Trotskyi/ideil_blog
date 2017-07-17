<?php

use Illuminate\Database\Seeder;
use Ideal\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 80)->create();
    }
}
