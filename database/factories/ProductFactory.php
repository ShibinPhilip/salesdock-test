<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "name" => "Product_" . strtoupper($faker->randomLetter) . $faker->randomDigit,
        "upload_speed" => $faker->numberBetween(10, 200),
        "download_speed" => $faker->numberBetween(10, 200),
        "technology" => $faker->randomElement(["fiber", "dialup"]),
        "static_ip" => $faker->randomElement([0, 1])
    ];
});
