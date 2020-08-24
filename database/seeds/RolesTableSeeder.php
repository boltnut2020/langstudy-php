<?php

use Illuminate\Database\Seeder;
use Amir\Permission\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'writer']);
    }
}
