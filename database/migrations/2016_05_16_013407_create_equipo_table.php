<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('jugador', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('NombreEmpresa');
            $table->string('NombreEquipo');
            $table->string('Representante');
            $table->string('TelefonoEmpresa');
            $table->string('TelefonoRepresentante');
            $table->integer('Jugador_id')->unsigned();
            $table->foreign('Jugador_id')->references('id')->on('jugador');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
