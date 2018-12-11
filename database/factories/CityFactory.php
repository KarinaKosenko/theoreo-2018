<?php

use Faker\Generator as Faker;

$factory->define(App\City::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('ru_RU');
    return [
        'name' => $faker->unique()->city
    ];
});
