<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
//use DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->truncateTables(array(
				'users',
				'password_resets',
				'tickets',
				'ticket_votes',
				'ticket_comments'
			));

		$this->call('UserTableSeeder');
		$this->call('TicketTableSeeder');
	}

	private function truncateTables(array $tables){
		$this->checkForeignKey(false);	
			foreach ($tables as $table) {
				DB::table($table)->truncate();
			}
		$this->checkForeignKey(true);	
	}

	private function checkForeignKey($valor){
			$flag = $valor ? '1':'0';
			DB::statement("SET FOREIGN_KEY_CHECKS = $flag");
	}

}
