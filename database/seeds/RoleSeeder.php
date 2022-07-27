<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'empresas']);
        $role3 = Role::create(['name' => 'solucionadores']);

        Permission::create(['name' => 'home',
                            'description' => 'ver el Dashboard'
                            ])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'user.index',
                            'description' => 'Ver lista de Usuarios'
                            ])->syncRoles([$role1]);
        Permission::create(['name' => 'user.role',
                            'description' => 'Asignar rol'
                            ])->syncRoles([$role1]);
        Permission::create(['name' => 'user.saverole',
                            'description' => 'Cambiar y/o guardar el rol de un usuario'
                            ])->syncRoles([$role1]);

        // permisos para la gestion de roles
        Permission::create(['name' => 'roles.index',
                            'description' => 'Ver lista de Roles'
                            ])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.create',
                            'description' => 'Crear nuevos Roles'
                            ])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.edit',
                            'description' => 'Editar roles'
                            ])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy',
                            'description' => 'Eliminar roles'
                            ])->syncRoles([$role1]);

       // permisos de la empresa
        Permission::create(['name' => 'roles.verdesafios',
                            'description' => 'visualizar los desafios'
                            ])->syncRoles([$role1]);
        
        Permission::create(['name' => 'roles.editardesafios',
                            'description' => 'editar los desafios'
                            ])->syncRoles([$role1]);

         Permission::create(['name' => 'roles.verideas',
                            'description' => 'visualizar las ideas'
                            ])->syncRoles([$role1]);
    }
}
