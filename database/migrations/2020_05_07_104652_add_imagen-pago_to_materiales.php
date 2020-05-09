<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagenPagoToMateriales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('CatalogoMateriales', function (Blueprint $table) {
            $table->string('imagen_pago')->nullable();
            $table->unsignedBigInteger('id_pago');
            $table->foreign('id_pago')->references('id')->on('pagos')->constrained()->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('CatalogoMateriales', function (Blueprint $table) {
            //
        });
    }
}
