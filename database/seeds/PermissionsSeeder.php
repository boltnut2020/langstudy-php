<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		// Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();	
        // create permissions
        //Permission::create(['name' => 'articles.*']);
        //Permission::create(['name' => 'categories.*']);
        //Permission::create(['name' => 'videos.*']);

		$roleAdmin = Role::create(['name' => 'admin']);
		//$roleAdmin->givePermissionTo('articles.*');
		//$roleAdmin->givePermissionTo('categories.*');
		//$roleAdmin->givePermissionTo('videos.*');


		$roleWriter = Role::create(['name' => 'writer']);
		// $roleWriter->givePermissionTo('articles.*');

		// create demo users
        $user = Factory(App\User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($roleAdmin);

        $user = Factory(App\User::class)->create([
            'name' => 'Writer',
            'email' => 'writer@example.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($roleWriter);

    }
}
