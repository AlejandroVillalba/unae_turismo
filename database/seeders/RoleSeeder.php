<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
       $role1 = Role::create(['name' => 'Administrador']);
       $role2 = Role::create(['name' => 'Invitado']);
       
        Permission::create(['name' => 'home', 'description' => 'Ver el inicio'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);  
        Permission::create(['name' => 'users.create', 'description' => 'Crear usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.edit', 'description' => 'Editar usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.destroy', 'description' => 'Eliminar usuario'])->syncRoles([$role1]);

        Permission::create(['name' => 'alojamientos.index', 'description' => ' Ver lista de alojamiento'])->syncRoles([$role1, $role2]);  
        Permission::create(['name' => 'alojamientos.create', 'description' => 'Crear alojamiento'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'alojamientos.edit', 'description' => 'Editar alojamiento'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'alojamientos.destroy', 'description' => 'Eliminar alojamiento'])->syncRoles([$role1, $role2]);
        
    }
}
