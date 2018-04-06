<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {
    $postCode = $faker->postcode;
    $company = $faker->company;

//     echo "\n------------ $postCode, $company";
    return [
        'name' => $faker->company,
        'city' => $faker->city,
        'street' => $faker->streetName,
        'adress' => $faker->buildingNumber,
        'postal_code' => $postCode,
    ];
});
