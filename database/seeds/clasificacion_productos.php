<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clasificacion_productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Limpieza',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Iluminación',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Electrónicos',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Accesorios',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Papelería',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Diseño y Decoración',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Cocina',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Manualidades',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Arte',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Tecnología',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Alimentos',
        ]);

        DB::table('catalogoclasificacionproductos')->insert([ 
            'nombre' => 'Cosméticos',
        ]);
    }
}
