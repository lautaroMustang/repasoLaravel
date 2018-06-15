<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'cost' => $faker->numberBetween(1, 2000),
      'profit_margin' => $faker->numberBetween(1, 100),
    ];
});
