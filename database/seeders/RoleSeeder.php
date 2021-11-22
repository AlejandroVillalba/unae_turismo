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
       
       Permission::create(['name' => 'home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'alojamientos.index'])->syncRoles([$role1, $role2]);;    
        Permission::create(['name' => 'alojamientos.create'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'alojamientos.edit'])->syncRoles([$role1, $role2]);;
        Permission::create(['name' => 'alojamientos.destroy'])->syncRoles([$role1, $role2]);;
        
    }
}
