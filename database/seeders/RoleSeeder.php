<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Admin']);

        $mod = Role::create(['name' => 'Mod']);

        $user = Role::create(['name' => 'User']);

        $permission = Permission::create(['name' => 'profile'])->syncRoles([$admin, $mod, $user]);
        $permission = Permission::create(['name' => 'profile.dates'])->syncRoles([$admin, $user]);
        $permission = Permission::create(['name' => 'users.show'])->syncRoles([$admin, $mod]);
        $permission = Permission::create(['name' => 'users.create'])->syncRoles([$admin]);
        $permission = Permission::create(['name' => 'users.enable'])->syncRoles([$admin]);
        $permission = Permission::create(['name' => 'users.desactivar'])->syncRoles([$admin]);
        $permission = Permission::create(['name' => 'users.edit'])->syncRoles([$admin]);
        $permission = Permission::create(['name' => 'users.destroy'])->syncRoles([$admin]);
    }
}
