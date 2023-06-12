<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\UserOnePayment;
use Faker\Generator as Faker;

$factory->define(UserOnePayment::class, function (Faker $faker) use ($factory) {
        return [
            'user_id'=>$factory->create(App\User::class)->id,
            'payment_type'=>$faker->creditCardType(),
            'provider'=>$faker->word(5),
            'account_no'=>$faker->randomDigit(1000,9999),
        ];
});
