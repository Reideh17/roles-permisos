<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\Permission;

class Roles_permisos_inicial extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'Admin', 'description' => 'Administrador del sistema']);
        $userRole = Role::create(['name' => 'User', 'description' => 'Usuario estándar']);

        $manageUsersPermission = Permission::create(['name' => 'manage_users', 'description' => 'Gestionar usuarios']);
        $viewReportsPermission = Permission::create(['name' => 'view_reports', 'description' => 'Ver reportes']);

        $adminRole->permissions()->attach([$manageUsersPermission->id, $viewReportsPermission->id]);
        $userRole->permissions()->attach($viewReportsPermission->id);
    }
}
