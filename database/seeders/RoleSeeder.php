<?php

namespace Database\Seeders;

use App\Http\Permissions\PermissionList;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionNames = [
            PermissionList::ALL_ROOT,
            PermissionList::CALENDAR,
        ];

        foreach ($permissionNames as $permissionName) {
            Permission::findOrCreate($permissionName, 'api');
        }

        $adminRole  = Role::findOrCreate(Role::NAME_ADMIN, 'api');
        $doctorRole = Role::findOrCreate(Role::NAME_DOCTOR, 'api');

        $adminRole->givePermissionTo([
            PermissionList::ALL_ROOT,
            PermissionList::CALENDAR,
        ]);

        $doctorRole->givePermissionTo([
            PermissionList::CALENDAR
        ]);
    }
}
