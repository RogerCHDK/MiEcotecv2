<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clasificacion_servicios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Limpieza',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Iluminación',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Electrónicos',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Accesorios',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Papelería',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Diseño y Decoración',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Cocina',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Manualidades',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Arte',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Tecnología',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Alimentos',
        ]);

        DB::table('catalogoclasificacionservicios')->insert([ 
            'nombre' => 'Cosméticos',
        ]);
    }
}
