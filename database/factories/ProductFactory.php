<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'short' => $faker->text(140),
        'body' => $faker->text(400),
    ];
});
