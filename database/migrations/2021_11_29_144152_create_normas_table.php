<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('habitacion_id');

            $table->string('nombre');
            $table->dateTime('ingreso');
            $table->dateTime('salida');
            
            $table->timestamps();

            $table->foreign('habitacion_id')->references('id')->on('habitacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('normas');
    }
}
