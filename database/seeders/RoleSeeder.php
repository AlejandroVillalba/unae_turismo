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

        Permission::create(['name' => 'roles.index', 'description' => 'Ver listado de  rol'])->syncRoles([$role1]);  
        Permission::create(['name' => 'roles.create', 'description' => 'Crear rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.edit', 'description' => 'Editar rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.show', 'description' => 'Detalle del rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy', 'description' => 'Eliminar rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'permissions.index', 'description' => 'Ver listado de permisos'])->syncRoles([$role1]);  
        Permission::create(['name' => 'permissions.create', 'description' => 'Crear permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'permissions.edit', 'description' => 'Editar permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'permissions.destroy', 'description' => 'Eliminar permisos'])->syncRoles([$role1]);

        Permission::create(['name' => 'alojamientos.index', 'description' => ' Ver lista de alojamiento'])->syncRoles([$role1]);  
        Permission::create(['name' => 'alojamientos.create', 'description' => 'Crear alojamiento'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'alojamientos.edit', 'description' => 'Editar alojamiento'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'alojamientos.destroy', 'description' => 'Eliminar alojamiento'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'normas.index', 'description' => 'Ver listado de permisos'])->syncRoles([$role1]);  
        Permission::create(['name' => 'normas.create', 'description' => 'Crear permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'normas.edit', 'description' => 'Editar permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'normas.destroy', 'description' => 'Eliminar permisos'])->syncRoles([$role1]);

        Permission::create(['name' => 'servicios.index', 'description' => 'Ver listado de permisos'])->syncRoles([$role1]);  
        Permission::create(['name' => 'servicios.create', 'description' => 'Crear permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'servicios.edit', 'description' => 'Editar permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'servicios.destroy', 'description' => 'Eliminar permisos'])->syncRoles([$role1]);

        Permission::create(['name' => 'tipo-habitacions.index', 'description' => 'Ver listado de permisos'])->syncRoles([$role1]);  
        Permission::create(['name' => 'tipo-habitacions.create', 'description' => 'Crear permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'tipo-habitacions.edit', 'description' => 'Editar permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'tipo-habitacions.destroy', 'description' => 'Eliminar permisos'])->syncRoles([$role1]);

        Permission::create(['name' => 'detalle-habitacions.index', 'description' => 'Ver listado de permisos'])->syncRoles([$role1]);  
        Permission::create(['name' => 'detalle-habitacions.create', 'description' => 'Crear permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'detalle-habitacions.edit', 'description' => 'Editar permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'detalle-habitacions.destroy', 'description' => 'Eliminar permisos'])->syncRoles([$role1]);

        Permission::create(['name' => 'categoria-alojamientos.index', 'description' => 'Ver listado de permisos'])->syncRoles([$role1]);  
        Permission::create(['name' => 'categoria-alojamientos.create', 'description' => 'Crear permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'categoria-alojamientos.edit', 'description' => 'Editar permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'categoria-alojamientos.destroy', 'description' => 'Eliminar permisos'])->syncRoles([$role1]);

        Permission::create(['name' => 'habitacions.index', 'description' => 'Ver listado de permisos'])->syncRoles([$role1]);  
        Permission::create(['name' => 'habitacions.create', 'description' => 'Crear permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'habitacions.edit', 'description' => 'Editar permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'habitacions.destroy', 'description' => 'Eliminar permisos'])->syncRoles([$role1]);


        
    }
}
