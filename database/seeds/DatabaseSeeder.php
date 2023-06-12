<?php

use App\Model\UserOneAddress;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // BlogsSeeder::class,
            // UserOneSeeder::class,
            // UserOneAddressSeeder::class,
            // UserOnePaymentSeeder::class,


           EmployesSeeder::class,
            AssignSeeder::class,
           DepartmentSeeder::class,
           RoleDepEmpSeeder::class,
           RoleSeeder::class,


        ]);
    }
}
