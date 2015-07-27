<?php 

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

class UserTableSeeder extends Seeder {


	public function run()
	{
		$this->createAdmin();
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