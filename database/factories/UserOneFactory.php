<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\UserOne;
use Faker\Generator as Faker;

$factory->define(UserOne::class, function (Faker $faker) {
    return [
        'username'=>$faker->name(),
        'password'=>$faker->randomNumber(5),
        'first_name'=>$faker->name(),
        'last_name'=>$faker->name(),
        'telephone'=>$faker->phoneNumber(),
    ];
});
