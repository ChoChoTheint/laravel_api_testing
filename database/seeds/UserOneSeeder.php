<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  $user_one = [
        //     [
        //         'username'=>'burma',
        //         'password'=>'burma',
        //         'first_name'=>'O',
        //         'last_name'=>'Burma',
        //         'telephone'=>'12345678',
        //     ]
        // ];
        // DB::table('user_one')->insert($user_one[0]);
        factory(App\Model\UserOne::class,10)->create();
    }
}
