<?php

use Illuminate\Database\Seeder;
use Ideal\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        factory(User::class, 5)->create();
=======
        factory(User::class, 10)->create();
>>>>>>> 3286041c1c35bf2dcf44203b613236d926746093

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
