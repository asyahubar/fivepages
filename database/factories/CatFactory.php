<?php

use Faker\Generator as Faker;

$factory->define(App\Cat::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'age' => rand(0, 40),
        'gender' => 'male'
    ];
});
