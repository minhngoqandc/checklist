<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'    => 'admin',
        	'email'   => 'admin@admin.com',
        	'password'=> bcrypt('123456'),
        	'level'   => '1',
        ]);

        DB::table('users')->insert([
        	'name'    => 'manager',
        	'email'   => 'manager@gmail.com',
        	'password'=> bcrypt('123457'),
        	'level'   => '2',
        ]);
    }
}
