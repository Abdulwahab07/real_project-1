<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\District::class, function (Faker $faker) {
    return [
        'district_name' => $faker->address,
        'city_id' => rand(1 , 3077),
    ];
});
