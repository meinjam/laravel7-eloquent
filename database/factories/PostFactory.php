<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 5),
        'category_id' => $faker->numberBetween(1, 10),
        'title' => $faker->sentence(6),
        'description' => $faker->sentence(15),
    ];
});
