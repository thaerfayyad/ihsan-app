<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //***************************Admin ****************************/

        // Permission::create(['name' => 'create-permission', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'read-permissions', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'update-permission', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'delete-permission', 'guard_name'=> 'admin']);

        // Permission::create(['name' => 'create-role', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'read-roles', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'update-role', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'delete-role', 'guard_name'=> 'admin']);

        // Permission::create(['name' => 'create-category', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'read-categories', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'update-category', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'delete-category', 'guard_name'=> 'admin']);

        // Permission::create(['name' => 'create-admin', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'read-admins', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'update-admin', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'delete-admin', 'guard_name'=> 'admin']);

        // Permission::create(['name' => 'create-user', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'read-users', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'update-user', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'delete-user', 'guard_name'=> 'admin']);

        // Permission::create(['name' => 'create-product', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'read-products', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'update-product', 'guard_name'=> 'admin']);
        // Permission::create(['name' => 'delete-product', 'guard_name'=> 'admin']);

        //***************************User ****************************/


        // Permission::create(['name' => 'create-category', 'guard_name'=> 'user']);
        // Permission::create(['name' => 'read-categories', 'guard_name'=> 'user']);
        // Permission::create(['name' => 'update-category', 'guard_name'=> 'user']);
        // Permission::create(['name' => 'delete-category', 'guard_name'=> 'user']);

        // Permission::create(['name' => 'create-product', 'guard_name'=> 'user']);
        // Permission::create(['name' => 'read-products', 'guard_name'=> 'user']);
        // Permission::create(['name' => 'update-product', 'guard_name'=> 'user']);
        // Permission::create(['name' => 'delete-product', 'guard_name'=> 'user']);

    }
}
