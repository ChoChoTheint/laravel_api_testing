<?php

use Illuminate\Database\Seeder;

class UserOneAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\UserOneAddress::class,10)->create();
    }
}
