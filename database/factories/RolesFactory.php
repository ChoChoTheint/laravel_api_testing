<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'role_name'=>$faker->name(),
        //'start_date'=>$faker->dateTimeBetween('-6 months','-3 months'),
        //'end_date'=>$faker->dateTimeBetween('- 2 months','now'),
        'created_by'=>$faker->numberBetween($min=1,$max=100),
        'updated_by'=>$faker->numberBetween($min=1,$max=100),
    ];
});
