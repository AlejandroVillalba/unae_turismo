<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleHabitacionsTable extends Migration
{
   
    public function up()
    {
        Schema::create('detalle_habitacions', function (Blueprint $table) {
            $table->id();

            $table->string('cama');
            $table->integer('cantidadCama');
            $table->integer('cantidadPersona');
            $table->string('dimension');
            $table->string('banos');
            $table->timestamps();

           
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('detalle_habitacions//');
    }
}
