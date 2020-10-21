<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [

        'CheckNum' => (string)$faker->unique()->randomNumber(4),
        'CustomerID' => $faker->numberBetween(1,5),
        'PaymentDate' => $faker->dateTime,
        'Amount' => (string)$faker->randomFloat(),

    ];
});


