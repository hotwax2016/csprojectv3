<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guide;
use Faker\Generator as Faker;

$factory->define(Guide::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'license_key' => $faker->randomElement([$faker->ean8, null]),
        'license_expire_at' => $faker->date,
        'contact_no' => $faker->phoneNumber,
        'category' => $faker->randomElement(['national', 'chauffeur ', 'area', 'site']),
        'contact_no' => $faker->phoneNumber,
        'description' => $faker->text,
        'dp_url' => '/img/dp/' . $faker->randomElement(['dp1.png', 'dp2.png', 'dp3.png', 'dp4.png']),
    ];
});
