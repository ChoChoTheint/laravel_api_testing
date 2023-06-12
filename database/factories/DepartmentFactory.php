<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    return [
        'dep_name'=>$faker->name(),
        'created_by'=>$faker->numberBetween($min=1,$max=100),
        'updated_by'=>$faker->numberBetween($min=1,$max=100),
    ];
});
