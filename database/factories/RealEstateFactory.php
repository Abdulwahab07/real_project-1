<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\RealEstate::class, function (Faker $faker) {
    return [
        'title' => $faker->lexify('للبيع ???? ????? ???? ????'),
        'region_id' => rand(1,13),
        'city_id' => rand(1,3000),
        'type_id' => rand(1,4),
        'document_type_id' => rand(1,5),
        'offer_id' => rand(1,5),
        'district_id' => rand(1,1000),
        'north' => $faker->longitude(15,35),
        'east' => $faker->latitude(33,57),
        'property_long' => rand(1000,1000000)/1000,
        'property_width' => rand(1000,1000000)/1000,
        'property_full_area' => rand(1000,1000000000)/1000,
    ];
});
