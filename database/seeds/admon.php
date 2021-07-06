<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class admon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 
            'nombre' => 'Rogelio',
            'apellido_paterno' => 'Pérez',
            'apellido_materno' => 'Díaz',
            'password' => Hash::make('admon'),
            'email' => 'admon@mail.com',
            'alias' => 'Administrador',
            'rol' => 'Administrador',
        ]);
    }
}
