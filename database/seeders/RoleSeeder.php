<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        
        // Creamos los roles
        $admin = Role::create(['name'=>'administrador', 'guard_name' => 'web']);
        $empacador = Role::create(['name' => 'empacador', 'guard_name' => 'web']);

        // Protegemos las rutas de usuarios
        $userIndex = Permission::create(['name' => 'user.index']);
        $userCreate = Permission::create(['name' => 'user.create']);
        $userStore = Permission::create(['name' => 'user.store']);
        $userUpdate = Permission::create(['name' => 'user.update']);
        $userDestroy = Permission::create(['name' => 'user.destroy']);
        
        // Asigno los permisos a cada rol.
        $admin->syncPermissions([
            $userIndex,
            $userCreate,
            $userStore,
            $userUpdate,
            $userDestroy
        ]);

        $empacador->givePermissionTo($userIndex);
    }
}
