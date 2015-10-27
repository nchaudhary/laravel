<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'nripendra',
				'email' => 'nick.nrpendra@ithands.net',
				'password' => '$2y$10$Go.e8pO9CavyKpkTSMOgyuwzmUv1Eak/cB8q3UeI6eDv.YRA0MYua',
				'remember_token' => NULL,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
