<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Employee;
use App\Model\Assign;
use Faker\Generator as Faker;

$factory->define(Assign::class, function (Faker $faker) use ($factory) {
    return [
        'employee_id'=>$factory->create(Employee::class)->id,
        'title'=>$faker->text(),
        'start_date'=>$faker->dateTimeBetween('-6 months','-3 months'),
        'end_date'=>$faker->dateTimeBetween('-2 months','now'),
        'progress'=>$faker->randomDigit(),
        'created_by'=>$faker->numberBetween($min=1,$max=100),
        'updated_by'=>$faker->numberBetween($min=1,$max=100),
    ];
});
