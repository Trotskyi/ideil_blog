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
<<<<<<< HEAD
        factory(Post::class, 50)->create();
=======
        factory(Post::class, 80)->create();
>>>>>>> 3286041c1c35bf2dcf44203b613236d926746093
    }
}
