<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
         for($i = 0; $i < 5; $i++){
        DB::table('discount')->insert([
        	'namediscount'=>$faker->name,
        	'percent'=>$faker->optional($weight = 0.9, $default = false)->randomDigit,       	
        ]);
       
    }
    }
}
