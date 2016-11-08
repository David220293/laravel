<?php
use proyecto\UserHobbies;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersHobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = new UserHobbies;
        $faker = Faker::create();
        foreach (range(1,5) as $index ) {
        	$data = array([
        	 'nombre' => $faker->word,
        	 'tipo' => $faker->word,
        	
        	]);
        	$users::insert($data);
     	}
    }
}
