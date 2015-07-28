<?php
	Use TeachMe\Entities\User;
	Use Faker\Factory as Faker;
	Use Faker\Generator;

class UserTableSeeder extends BaseSeeder {

	public function getModel(){
		return New User();
	}

	public function getDummyData(Generator $faker, array $customValues = array()){
		 return [
			'name'=> $faker->name,
			'email' => $faker->email,
			'password' => bcrypt('secret')
		];
	}

	public function run()
	{

		$this->createAdmin();
		$this->createMultiple(50);
	}

	private function createAdmin()
	{
		$this->create([
			'name'=> 'Ricardo lugo',
			'email' => 'ricardo.lugo.recillas@gmail.com',
			'password' => bcrypt('ricardo')
			]);


	}


}