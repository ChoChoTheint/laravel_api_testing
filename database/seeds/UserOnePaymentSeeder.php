<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserOnePaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              $payment = [
                [
                    'payment_type'=>'Visa',
                    'provider'=>'burma',
                    'account_no'=>'0123',
                ]
            ];
        DB::table('user_one_payment')->insert($payment[0]);
        // factory(App\Model\UserOnePayment::class,10)->create();
    }
}
