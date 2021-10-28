<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //agregando roles
        $rolAdministrador = Role::create(['name' => 'Administrador']);
        $rolContabilidad = Role::create(['name' => 'Contabilidad']);
        $rolRecpcion = Role::create(['name' => 'Recepcion']);
        $rolMensajero = Role::create(['name' => 'Mensajero']);
        $rolDoctor = Role::create(['name' => 'Doctor']);
        $rolAsistentes = Role::create(['name' => 'Asistentes']);
        $rolSecretaria = Role::create(['name' => 'Secretaria']);
        $rolDeveloper = Role::create(['name' => 'Developer']);

        //crando permisos
        Permission::create(['name' => 'admin.index'])->syncRoles($rolAdministrador,$rolContabilidad,$rolRecpcion,$rolMensajero,$rolDoctor,$rolAsistentes, $rolSecretaria,$rolDeveloper);
        Permission::create(['name' => 'contabilidad.index'])->syncRoles($rolDeveloper,$rolAdministrador);

        Permission::create(['name' => 'mensajero.index'])->syncRoles($rolDeveloper,$rolAdministrador);
        Permission::create(['name' => 'doctor.index'])->syncRoles($rolDeveloper,$rolAdministrador);
        Permission::create(['name' => 'asistente.index'])->syncRoles($rolDeveloper,$rolAdministrador);
        Permission::create(['name' => 'secretaria.index'])->syncRoles($rolDeveloper,$rolAdministrador);
        Permission::create(['name' => 'developer.index'])->syncRoles($rolDeveloper,$rolAdministrador);
        //Permisos a los Menu
        Permission::create(['name'=>'estadofinanciero.balancegeneral'])->syncRoles($rolDeveloper,$rolAdministrador,$rolContabilidad);
        Permission::create(['name'=>'proveedores.index'])->syncRoles($rolDeveloper,$rolAdministrador,$rolContabilidad,$rolRecpcion);
        Permission::create(['name'=>'catalogo.index'])->syncRoles($rolDeveloper,$rolAdministrador,$rolContabilidad);
        Permission::create(['name'=>'asientos.index'])->syncRoles($rolDeveloper,$rolAdministrador,$rolContabilidad);
        Permission::create(['name'=>'tareas.index'])->syncRoles($rolSecretaria,$rolAsistentes,$rolDoctor,$rolMensajero,$rolRecpcion,$rolDeveloper,$rolAdministrador,$rolAdministrador,$rolContabilidad,$rolRecpcion,$rolMensajero,$rolDoctor,$rolAsistentes, $rolSecretaria,$rolDeveloper);
        Permission::create(['name'=>'recepcion.index'])->syncRoles($rolSecretaria,$rolAsistentes,$rolDeveloper,$rolAdministrador,$rolRecpcion);
        Permission::create(['name'=>'inventario.index'])->syncRoles($rolDeveloper,$rolAdministrador,$rolContabilidad);
        Permission::create(['name'=>'reporte.index'])->syncRoles($rolDeveloper,$rolAdministrador);


        //Roles
        // Nos quedamos en el video 2 por el minituo 10:50
    }
}
