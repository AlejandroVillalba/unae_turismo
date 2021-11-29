<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlojamientosHasServiciosTable extends Migration
{
  
    public function up()
    {
        Schema::create('alojamientos_has_servicios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('alojamiento_id');
            $table->unsignedBigInteger('servicio_id');

            $table->foreign('alojamiento_id')->references('id')->on('alojamientos')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('alojamientos_has_servicios');
    }
}
