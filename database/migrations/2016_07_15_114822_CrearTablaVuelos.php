<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVuelos extends Migration
{
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('aerolinea');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('vuelos');
    }
}
