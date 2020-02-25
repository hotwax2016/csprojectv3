<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tourist;
use Faker\Generator as Faker;

$factory->define(Tourist::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'contact_no' => $faker->phoneNumber,
        'dp_url' => '/public/img/'.$faker->slug,
    ];
});


