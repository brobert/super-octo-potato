<?php
use Faker\Generator as Faker;

/*
 * |--------------------------------------------------------------------------
 * | Model Factories
 * |--------------------------------------------------------------------------
 * |
 * | This directory should contain each of the model factory definitions for
 * | your application. Factories provide a convenient way to generate new
 * | model instances for testing / seeding your application's database.
 * |
 */

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->e164PhoneNumber,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',  // secret
        'remember_token' => str_random(10),
        'valid_from' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = '+3 years', $timezone = null),
        'valid_to' => $faker->dateTimeBetween($startDate = '+3 years', $endDate = '+4 years', $timezone = null),

        'type' => $faker->randomElement([
//             'developer',
            'admin',
            'user'
        ])
    ];
});
