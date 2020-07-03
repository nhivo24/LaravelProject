<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        	'name' =>'admin',
        	'username' => 'admin',
        	'password' => Hash::make('admin'),
        	'role' =>'admin',
        ]);
         DB::table('users')->insert([
        	'name' =>'Võ Thị Nhi',
        	'username'=>'vothinhi',
        	'password' => Hash::make('123'),
        	'role'=>'user',
        ]);

    }
}
