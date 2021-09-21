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
        Permission::create(['name' => 'admin.index']);
        Permission::create(['name' => 'contabilidad.index']);
        Permission::create(['name' => 'recepcion.index']);
        Permission::create(['name' => 'mensajero.index']);
        Permission::create(['name' => 'doctor.index']);
        Permission::create(['name' => 'asistente.index']);
        Permission::create(['name' => 'secretaria.index']);
        Permission::create(['name' => 'developer.index']);
        //Roles
        // Nos quedamos en el video 2 por el minituo 10:50
    }
}
