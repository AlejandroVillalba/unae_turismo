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

            $table->unsignedBigInteger('habitacion_id');
    

            $table->string('nombre');
            $table->timestamps();

            $table->foreign('habitacion_id')->references('id')->on('habitacions');
            
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('detalle_habitacions//');
    }
}
