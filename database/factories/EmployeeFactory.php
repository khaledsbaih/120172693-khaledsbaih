<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [

        'OfficeCode' => $faker->randomDigit,
        'reportsTo' => $faker->randomDigit,
        'LastName' => $faker->name,
        'FirstName' => $faker->name,
        'Extension' => $faker->text(3),
        'Email' => $faker->unique()->email,
        'JobTitle' => $faker->jobTitle,


    ];
});
