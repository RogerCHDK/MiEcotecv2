<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerramientasConsejosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramientas_consejos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_herramienta');
            $table->foreign('id_herramienta')->references('id')->on('catalogoherramientas')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_consejo');
            $table->foreign('id_consejo')->references('id')->on('consejos')->constrained()->onDelete('cascade');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Herramientas_Consejos');
    }
}
