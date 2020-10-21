<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productline;
use Faker\Generator as Faker;

$factory->define(Productline::class, function (Faker $faker) {
    return [

        'DesclnText' => $faker->text(255),
        'DesclnHTML' => $faker->text(255),
        'Image' => $faker->text('5'),

        ];
});



