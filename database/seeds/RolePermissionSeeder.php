<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Do same for the admin guard for tutorial purposes
        $roleSuperAdmin = Role::create(['name' => 'Superadmin', 'guard_name' => 'admin']);

        // Permission List as array
        $permissions = [

            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    // admin Permissions
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    // role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    // profile Permissions
                    'profile.view',
                    'profile.edit',
                ]
            ],
        ];

       // Create and Assign Permissions
       for ($i = 0; $i < count($permissions); $i++) {
           $permissionGroup = $permissions[$i]['group_name'];
           for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
               // Create Permission
               $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup, 'guard_name' => 'admin']);
               $roleSuperAdmin->givePermissionTo($permission);
               $permission->assignRole($roleSuperAdmin);
           }
       }

       // Assign super admin role permission to superadmin user
       $admin = Admin::where('username', 'superadmin')->first();
       if ($admin) {
           $admin->assignRole($roleSuperAdmin);
       }
    }
}
