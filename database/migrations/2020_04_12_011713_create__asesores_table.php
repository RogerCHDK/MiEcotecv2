<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_clasificacionAsesor');
            $table->foreign('id_clasificacionAsesor')->references('id')->on('catalogoclasificacionasesores')->constrained()->onDelete('cascade');
            $table->integer('telefono');
            $table->text('descripcion');
            $table->string('especialidad');
            $table->text('reconocimientos');
            $table->string('correoElectronico');
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
        Schema::dropIfExists('Asesores');
    }
}
