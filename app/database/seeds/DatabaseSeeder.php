<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		//para usar estas lineas de codigo usar en consola
		//php artisan db:seed
		//$this->call('CategoryTableSeeder');
		$this->call('CandidateTableSeeder');
		//$this->call('UserTableSeeder');
	}

}
