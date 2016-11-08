<?php
use proyecto\MyUser;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new MyUser;
        $faker = Faker::create();
        foreach (range(1,5) as $index ) {
             
            $data = array([
             'name' => $faker->name,
             'email' => $faker->email,
             'password' => $faker->password,
             'id_hobbies' => rand(1,5),
            ]);

            $users::insert($data);
        }
       
    }
}
