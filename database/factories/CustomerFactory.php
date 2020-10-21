<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'salesRepEmployeeNum' => $faker->randomDigit,
        'Name' => $faker->name,
        'LastName' => $faker->name,
        'FirstName' => $faker->name,
        'Phone' => $faker->phoneNumber,
        'Address1' => $faker->address,
        'Address2' => $faker->address,
        'City' => $faker->city,
        'State' => $faker->state,
        'PostalCode' => $faker->randomNumber(3),
        'Country' => $faker->country,
        'CreditLimit' => $faker->randomFloat(6),

    ];
});



