<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Employee;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'emp_name'=>$faker->name(),
        'emp_ph'=>$faker->phoneNumber(),
        'emp_pwd'=> Hash::make($faker->password),
        'emp_address'=>$faker->address(),
        'emp_email'=>$faker->email(),
        'created_by'=>$faker->numberBetween($min=1,$max=100),
        'updated_by'=>$faker->numberBetween($min=1,$max=100),
        //'start_date'=>$faker->dateTimeBetween('-6 months','-3 months'),
        //'end_date'=>$faker->dateTimeBetween('- 2 months','now'),
    ];
});
