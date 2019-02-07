<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Todo::class, function (Faker $faker) {
    $statuses = ['done', 'in process', 'fail'];
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph,
        'date' => time(),
        'status' => $statuses[rand(0, 2)]
    ];
});
