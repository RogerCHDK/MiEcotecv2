<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clasificacion_asesores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Botánica',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Ecología',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Zoología',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Fisiología',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Desarrollo',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Biología Marina',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Biología Molecular',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Genética',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Microtecnlogía',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Biotecnología',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Bioquímica',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Gestión Ambiental',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Seguridad y Medio Ambiente',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Agronomía',
        ]);

        DB::table('catalogoclasificacionasesores')->insert([ 
            'nombre' => 'Ecotecnología',
        ]);
    }
}
