<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_pago');
            $table->foreign('id_pago')->references('id')->on('pagos')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_clasificacionServicio'); 
            $table->foreign('id_clasificacionServicio')->references('id')->on('catalogoclasificacionservicios')->constrained()->onDelete('cascade');
            $table->string('imagen');
            $table->string('nombre_establecimiento'); 
            $table->string('estado');
            $table->string('municipio');
            $table->string('colonia');
            $table->string('calle');
            $table->string('url');
            $table->text('descripcion');
            $table->integer('telefono');
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
        Schema::dropIfExists('servicios');
    }
}
