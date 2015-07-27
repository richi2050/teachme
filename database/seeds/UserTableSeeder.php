<?php 

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder {


	public function run()
	{
		$this->createUser(50);
		$this->createAdmin();
	}


	private function createUser($total){
		$faker = Faker::create();
		for($i=1; $i <= $total; $i++){
			User::create([
				'name'=> $faker->name,
				'email' => $faker->email,
				'password' => bcrypt('secret')
				]);
		}

	}

	private function createAdmin()
	{
		User::create([
			'name'=> 'Ricardo lugo',
			'email' => 'ricardo.lugo.recillas@gmail.com',
			'password' => bcrypt('ricardo')
			]);

	}


}