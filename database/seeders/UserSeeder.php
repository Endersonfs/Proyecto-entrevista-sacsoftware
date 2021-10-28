<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Enderson',
            'email'=>'ender@labopaes.com',
            'password'=>bcrypt('123456789')
        ])->syncRoles('Developer');
        User::create([
            'name'=>'Administrador',
            'email'=>'administrador@labopaes.com',
            'password'=>bcrypt('123456789')
        ])->syncRoles('Administrador');
        User::create([
            'name'=>'Contabilidad',
            'email'=>'contabilidad@labopaes.com',
            'password'=>bcrypt('123456789')
        ])->syncRoles('Contabilidad');
        User::create([
            'name'=>'Recepcion',
            'email'=>'recepcion@labopaes.com',
            'password'=>bcrypt('123456789')
        ])->syncRoles('Recepcion');
    }
}
