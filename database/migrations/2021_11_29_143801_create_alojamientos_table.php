<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlojamientosTable extends Migration
{
    
    public function up()
    {
        Schema::create('alojamientos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categoria_alojamiento_id');
            

            $table->string('nombre');
            $table->string('slug');
            $table->string('imagenes');
            $table->string('direccion');
            $table->string('nombreContacto');
            $table->string('telefono');
            $table->text('descripcion'); 

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('categoria_alojamiento_id')->references('id')->on('categoria_alojamientos');
            
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('alojamientos');
    }
}
