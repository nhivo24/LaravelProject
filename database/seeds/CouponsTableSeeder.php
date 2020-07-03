<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('coupons')->insert([
       		'code'=>'NHISOCUTE',
       		'percent_off'=>0.5,
       ]);
       DB::table('coupons')->insert([
       		'code'=>'LTDVN',
       		
       		'percent_off'=>0.99,
       ]);
    }
}
