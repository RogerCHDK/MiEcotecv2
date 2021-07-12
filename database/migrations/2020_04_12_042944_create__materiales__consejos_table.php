<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialesConsejosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales_consejos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_material');
            $table->foreign('id_material')->references('id')->on('catalogomateriales')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('Materiales_Consejos');
    }
}
