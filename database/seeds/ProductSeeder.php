<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker )
    {

  for($i = 0; $i < 10; $i++){
        DB::table('products')->insert([
        	'name'=>$faker->name,
        	'image'=>$faker->imageURl($with = 300, $height = 200),
        	'price'=>$faker->randomFloat(4, 17000, 500000),
        	'description'=>$faker->randomLetter,
        	'quantity'=>$faker->numberBetween($min = 1, $max = 100),
        	'category_id'=>$faker->numberBetween($min = 1, $max = 4),
        ]);
       
    }
}
}
