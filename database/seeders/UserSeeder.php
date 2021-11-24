<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run()
    {
       User::create([
           'name' => 'Admin',
           'email' => 'admin@admin.com',
           'password' => '12345678',
       ])->assignRole('Administrador');

       User::create([
        'name' => 'Invitado',
        'email' => 'invitado@invitado.com',
        'password' => '12345678',
    ])->assignRole('Invitado');
    }
}
