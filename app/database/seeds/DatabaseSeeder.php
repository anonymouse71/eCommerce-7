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

		// $this->call('UserTableSeeder');
		// $this->call('CategorySeeder');
		// $this->call('ProductSeeder');
		$this->call('ColorTableSeeder');
		$this->call('SizeTableSeeder');
	}

}
