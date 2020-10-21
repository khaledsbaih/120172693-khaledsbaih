<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [

        'CustomerID' => $faker->numberBetween(1,5),
        'OrderDate' => $faker->dateTime,
        'RequiredDate' => $faker->dateTime,
        'ShippedDate' => $faker->dateTime,
        'Status' => $faker->numberBetween(0,2),
        'Comments' => $faker->text('5'),

        //
    ];
});
