<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create permissions
        $permissionsforReeder = [
            //App permissions
            'view books',
            'like books',
            'like authors',
            'view authors',

            //reader profile permissions
            'view profile',
            'edit profile',
            'delete profile'
        ];

        $permissionsforWriter = [
          //Book permissions
            'create books',
            'edit books',
            'delete books',

            //writer profile permissions
            'edit writer profile',
            'delete writer profile',
        ];
       
        //create for roles
        $writer = Role::create(['name' => 'writer']);
        $reader = Role::create(['name' => 'reader']);
        // create roles and permission

        foreach ($permissionsforReeder as $permission) {
            Permission::create(['name' => $permission]);
        }

        foreach ($permissionsforWriter as $permission) {
            Permission::create(['name' => $permission]);
        }

        $reader->givePermissionTo($permissionsforReeder);
        $writer->givePermissionTo($permissionsforWriter);
    }
}
