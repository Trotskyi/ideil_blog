<?php

    use Ideal\Post;
    use Ideal\Tag;
    use Ideal\Category;
<<<<<<< HEAD
    use Illuminate\Support\Str;
=======
>>>>>>> 3286041c1c35bf2dcf44203b613236d926746093

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Ideal\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Ideal\Post::class, function (Faker\Generator $faker) {

<<<<<<< HEAD
    $title = $faker->sentence();
    $slug = Str::slug($title);

    return [
        'title' => $title,
        'body' => $faker->text(140),
        'slug' => $slug,
=======
    return [
        'title' => $faker->sentence(2),
        'body' => $faker->text(140),
        'slug' => $faker->sentence(1),
>>>>>>> 3286041c1c35bf2dcf44203b613236d926746093
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'category_id' => Category::all()->random()->id,

    ];
});


$factory->define(Ideal\Category::class, function (Faker\Generator $faker) {

    return [
       'name' => $faker->sentence(1),
    ];
});

$factory->define(Ideal\Tag::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->sentence(1),
    ];
});


$factory->define(Ideal\PostTag::class, function (Faker\Generator $faker) {

    return [
        'post_id' => Category::all()->random()->id,
    ];
});


