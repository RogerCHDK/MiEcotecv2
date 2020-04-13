<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_pago');
            $table->foreign('id_pago')->references('id')->on('pagos')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('id_clasificacionProducto');
            $table->foreign('id_clasificacionProducto')->references('id')->on('catalogoclasificacionproductos')->constrained()->onDelete('cascade');;
            $table->string('nombre');
            $table->string('imagen');
            $table->text('descripcion');
            $table->double('precio');
            $table->string('url');
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
        Schema::dropIfExists('productos');
    }
}
