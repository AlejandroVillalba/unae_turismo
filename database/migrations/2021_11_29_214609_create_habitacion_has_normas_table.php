<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionHasNormasTable extends Migration
{
  
    public function up()
    {
        Schema::create('habitacion_has_normas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('habitacion_id');
            $table->unsignedBigInteger('norma_id');

            $table->foreign('habitacion_id')->references('id')->on('habitacions')->onDelete('cascade');
            $table->foreign('norma_id')->references('id')->on('normas')->onDelete('cascade');



            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('habitacion_has_normas');
    }
}

