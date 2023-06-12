<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Employee;
use App\Model\Department;
use App\Model\RoleDepEmp;
use Faker\Generator as Faker;

$factory->define(RoleDepEmp::class, function (Faker $faker) use ($factory){
    return [
        'role_id'=>$factory->create(App\Model\Role::class)->id,
        'department_id'=>$factory->create(Department::class)->id,
        'employee_id'=>$factory->create(Employee::class)->id,
    ];
});
