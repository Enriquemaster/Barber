<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User; 
use Spatie\Permission\PermissionRegistrar;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 1; // Cambia esto al ID del usuario que quieres asignar el rol
        $userId2 = 2; // Cambia esto al ID del usuario que quieres asignar el rol
        
        // Obtener el usuario por su ID
        $user = User::find($userId);
        $user2 = User::find($userId2);

        // Obtener roles por nombre
        $role1 = Role::where('name', 'Administrador')->first();
        $role2 = Role::where('name', 'Cliente')->first();

       // Eliminar el rol "Cliente" del usuario antes de asignar "Administrador"
       if ($user && $role1) {
        if ($user->hasRole('Cliente')) {
            $user->removeRole('Cliente');
        }
        $user->assignRole($role1);
    }
    

        if ($user2 && $role2) {
            $user2->assignRole($role2);
        }
    }
}
