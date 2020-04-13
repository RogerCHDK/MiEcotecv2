<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicidadIndirectaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PublicidadIndirecta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_pago');
            $table->foreign('id_pago')->references('id')->on('pagos')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_material');
            $table->foreign('id_material')->references('id')->on('catalogomateriales')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_herramienta');
            $table->foreign('id_herramienta')->references('id')->on('catalogoherramientas')->constrained()->onDelete('cascade');
            $table->boolean('estatus');
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
        Schema::dropIfExists('PublicidadIndirecta');
    }
}
