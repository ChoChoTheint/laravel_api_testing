<?php

use Illuminate\Database\Seeder;

class RoleDepEmpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\RoleDepEmp::class,10)->create();
    }
}
