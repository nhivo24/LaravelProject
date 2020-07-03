<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories=['Ukulele','Piano','Violon','Guitar'];

    	for($i = 0;$i < 4; $i++){
    		 DB::table('categories')->insert([
        	'name'=>$categories[$i]
        ]);
    	}
       
    }
}
