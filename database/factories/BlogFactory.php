<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'email'=>$faker->email(),
        'title'=>$faker->text(100),
        'password'=>$faker->randomNumber(5),
        'ishidden'=>$faker->boolean()
    ];
});
