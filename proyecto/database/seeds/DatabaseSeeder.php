<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('UserHobbies')->insert(
        	[
        	 'nombre' => str_random(10),
        	 'tipo' => str_random(10).'@gmail.com',
        	
        	]);
    }
}
