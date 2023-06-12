<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $product = [
        //     [
        //         'name'=>'burma',
        //         'email'=>'burma@gmail.com',
        //         'body'=>'This is burma body',
        //         'ishidden'=>1
        //     ]
        // ];
        // DB::table('blogs')->insert($product[0]);
        factory(App\Model\Blog::class,50)->create();
    }
}
