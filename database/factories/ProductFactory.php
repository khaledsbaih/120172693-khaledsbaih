<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [

        'Code' => (string)$faker->unique()->randomNumber(4),
        'ProductlineID' => $faker->numberBetween(1,5),
        'Name' => $faker->name,
        'Scale' => $faker->randomDigit,
        'vendor' => $faker->name,
        'PdtDescription' => $faker->text(255),
        'QtyInStock' => $faker->randomDigit,
        'BuyPrice' => $faker->randomFloat(),
        'MSRP' => $faker->text(255),

    ];
});



