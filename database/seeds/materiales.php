<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class materiales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Aceite',
            'imagen' => 'aceite.jpg'
        ]);

        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Bolsas Papel',
            'imagen' => 'bolsas papel.jpg'
        ]);

        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Bolsas Plastico',
            'imagen' => 'bolsas plastico.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Carton',
            'imagen' => 'carton.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Colillas',
            'imagen' => 'colillas.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Envoltorios de comida',
            'imagen' => 'envoltorios de comida.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Latas',
            'imagen' => 'latas.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Llantas',
            'imagen' => 'llantas.jpg'
        ]);

        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Madera',
            'imagen' => 'madera.jpg'
        ]);

        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Metalicos',
            'imagen' => 'metalicos.jpg'
        ]);

        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Organicos',
            'imagen' => 'organicos.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Papel',
            'imagen' => 'papel.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Pilaas',
            'imagen' => 'pilas.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Plasticos',
            'imagen' => 'plasticos.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Residuos Electronicos',
            'imagen' => 'residuos electronicos.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Tapas',
            'imagen' => 'tapas.jpg'
        ]);

        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Telas',
            'imagen' => 'telas.jpg'
        ]);

        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Tetrapack',
            'imagen' => 'tetrapack.jpg'
        ]);

        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Tijeras',
            'imagen' => 'tijeras_barrilito.jpg'
        ]);
        DB::table('catalogomateriales')->insert([ 
            'nombre' => 'Vidrio',
            'imagen' => 'vidrio.jpg'
        ]);
    }
}
