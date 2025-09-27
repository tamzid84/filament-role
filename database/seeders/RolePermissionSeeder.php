<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // 🧱 Permissions
        $permissions = [
            'view products',
            'create products',
            'edit products',
            'delete products',

            'view categories',
            'create categories',
            'edit categories',
            'delete categories',

            'view tags',
            'create tags',
            'edit tags',
            'delete tags',

            'manage roles',
            'view roles', 'create roles', 'edit roles', 'delete roles',
            'view permissions', 'create permissions', 'edit permissions', 'delete permissions',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // 🎩 Roles
        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $manager = Role::firstOrCreate(['name' => 'Manager']);
        $staff = Role::firstOrCreate(['name' => 'Staff']);

        // Assign Permissions
        $admin->givePermissionTo(Permission::all());

        $manager->givePermissionTo([
            'view products',
            'create products',
            'view categories',
            'create categories',
            'view tags',
            'create tags',
        ]);

        $staff->givePermissionTo([
            'view products',
            'view categories',
            'view tags',
        ]);

        // 👤 Assign to Users
        User::find(1)?->assignRole('Admin');
        User::find(2)?->assignRole('Manager');
        User::find(3)?->assignRole('Staff');
    }
}
