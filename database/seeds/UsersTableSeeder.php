<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('users')->insert([
        [
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ],
        [
            'name' => 'writer',
            'email' => 'writer@example.com',
            'password' => Hash::make('password'),
        ]
        ]);
    }
}
