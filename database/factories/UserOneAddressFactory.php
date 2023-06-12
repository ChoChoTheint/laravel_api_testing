<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\UserOneAddress;
use Faker\Generator as Faker;

$factory->define(UserOneAddress::class, function (Faker $faker) use ($factory) {
    return [
        'user_id'=>$factory->create(App\User::class)->id,
        'address_line1'=>$faker->address(),
        'address_line2'=>$faker->address(),
        'city'=>$faker->city(),
        'postal_code'=>$faker->postcode(),
        'country'=>$faker->country(),
        'telephone'=>$faker->phoneNumber(),
        'mobile'=>$faker->phoneNumber(),
    ];
});
