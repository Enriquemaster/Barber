<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User; 
use Spatie\Permission\PermissionRegistrar;

class RolesPermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // ASIGNACIÓN DE ROLES Y PERMISOS CON SPATIE
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'crear producto']);
        Permission::create(['name' => 'ver producto']);
        Permission::create(['name' => 'editar producto']);
        Permission::create(['name' => 'eliminar producto']);
        Permission::create(['name' => 'ver productos']);

        Permission::create(['name' => 'crear servicio']);
        Permission::create(['name' => 'ver servicio']);
        Permission::create(['name' => 'editar servicio']);
        Permission::create(['name' => 'eliminar servicio']);
        Permission::create(['name' => 'ver servicios']);

        Permission::create(['name' => 'crear reto']);
        Permission::create(['name' => 'ver reto']);
        Permission::create(['name' => 'editar reto']);
        Permission::create(['name' => 'eliminar reto']);
        Permission::create(['name' => 'ver retos']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Administrador']);
        $role1->givePermissionTo('crear producto');
        $role1->givePermissionTo('ver producto');
        $role1->givePermissionTo('editar producto');
        $role1->givePermissionTo('eliminar producto');
        $role1->givePermissionTo('ver productos');
        
        $role1->givePermissionTo('crear servicio');
        $role1->givePermissionTo('ver servicio');
        $role1->givePermissionTo('editar servicio');
        $role1->givePermissionTo('eliminar servicio');
        $role1->givePermissionTo('ver servicios');

        $role1->givePermissionTo('crear reto');
        $role1->givePermissionTo('ver reto');
        $role1->givePermissionTo('editar reto');
        $role1->givePermissionTo('eliminar reto');
        $role1->givePermissionTo('ver retos');
        //////////////////////////////////////////

        $role2= Role::create(["name"=>"Cliente"]);
        $role2->givePermissionTo('ver productos');
        $role2->givePermissionTo('ver productos');
        $role2->givePermissionTo('ver productos');
        //////////////////////////////////////////

        $role3 = Role::create(['name' => 'Super-Admin']);

        // ID del usuario existente
        $userId = 1; // Cambia esto al ID del usuario que quieres asignar el rol
        $userId2 = 2; // Cambia esto al ID del usuario que quieres asignar el rol
        // Obtener el usuario por su ID
        $user = User::find($userId);
        $user2 = User::find($userId2);

        $user->assignRole($role1);
        $user2->assignRole($role2);
    }
    }
