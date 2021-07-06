<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class entornos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Limpieza',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Energía (Electricidad)',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Papelería y Mercería',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Diseño y Decoración',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Viajes',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Estilo de Vida',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Escuela',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Alimentación y Salud',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Automóviles',
        ]);

        DB::table('catalogoentornos')->insert([ 
            'nombre' => 'Oficina',
        ]);
    }
}
