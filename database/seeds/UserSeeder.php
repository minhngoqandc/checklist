<?php

	use Illuminate\Database\Seeder;

	class Users extends Seeder{
		public function run()
		{
			DB::table('users')->insert(
				[
					'name' => 'admin',
					'email'=> 'admin@admin.com',
					'password'=> bcrypt('123456'), 
					'level'=>'1'
				]);
		}
	}

?>