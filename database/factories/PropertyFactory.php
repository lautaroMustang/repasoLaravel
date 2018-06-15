<?php

use Faker\Generator as Faker;

$factory->define(\App\Property::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
