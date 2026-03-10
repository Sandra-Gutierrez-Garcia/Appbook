<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create permissions
        $permissionsForReader = [
            // App permissions
            'view books',
            'like books',
            'like authors',
            'view authors',

            // Reader profile permissions
            'view profile',
            'edit profile',
            'delete profile'
        ];

        $permissionsForWriter = [
            // Book permissions
            'create books',
            'edit books',
            'delete books',

            // Writer profile permissions
            'edit writer profile',
            'delete writer profile',
        ];
       
        // Create roles
        $writer = Role::firstOrCreate(['name' => 'writer']);
        $reader = Role::firstOrCreate(['name' => 'reader']);
        // Create permissions and assign them to roles

        foreach ($permissionsForReader as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        foreach ($permissionsForWriter as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $reader->givePermissionTo($permissionsForReader);
        $writer->givePermissionTo($permissionsForWriter);
    }
}
