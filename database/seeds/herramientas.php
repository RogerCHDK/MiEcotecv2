<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class herramientas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Cinta de aislar',
            'imagen' => 'cinta de aislar.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Cinta metrica',
            'imagen' => 'cinta metrica.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Compás',
            'imagen' => 'compás.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Cutter',
            'imagen' => 'cutter.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Destornillador',
            'imagen' => 'destornillador.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Diurex',
            'imagen' => 'diurex.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Escuadra',
            'imagen' => 'escuadra.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Goma',
            'imagen' => 'goma.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Lapiz',
            'imagen' => 'lapiz.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Lima',
            'imagen' => 'lima.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Llave',
            'imagen' => 'llave.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Martillo',
            'imagen' => 'martillo.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Pegamento',
            'imagen' => 'pegamento.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Pinzas',
            'imagen' => 'pinzas.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Pluma',
            'imagen' => 'pluma.jpg'
        ]);
        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Plumones',
            'imagen' => 'plumones.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Regla',
            'imagen' => 'regla.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Silicon',
            'imagen' => 'silicon.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Tijeras',
            'imagen' => 'tijeras.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Tornillos',
            'imagen' => 'tornillos.jpg'
        ]);

        DB::table('catalogoherramientas')->insert([ 
            'nombre' => 'Transportador',
            'imagen' => 'transportador.jpg'
        ]);


        
    }
}
