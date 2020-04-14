<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('imagen')->nullable();
            $table->string('alias');
            $table->string('rol');
            $table->string('enlace_facebook')->nullable();
            $table->string('enlace_instagram')->nullable();
            $table->string('enlace_twitter')->nullable();
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
        Schema::dropIfExists('users');
    }
}
