<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'thumbnail' => $faker->imageUrl(),
        'body' => $faker->paragraph,
        'category' => rand(0, 4),
        'views' => rand(0, 100000)
    ];
});
