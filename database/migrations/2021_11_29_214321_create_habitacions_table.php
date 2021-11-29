<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tipo_habitacions_id');
            $table->unsignedBigInteger('alojamiento_id');
            $table->unsignedBigInteger('detalle_habitacion_id');

            $table->string('nombre');
            $table->double('precio', 8, 2);
            $table->text('descripcion');
            $table->boolean('disponible')->default(1);
            
            $table->timestamps();

            $table->foreign('tipo_habitacions_id')->references('id')->on('tipo_habitacions');
            $table->foreign('alojamiento_id')->references('id')->on('alojamientos');
            $table->foreign('detalle_habitacion_id')->references('id')->on('detalle_habitacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitacions');
    }
}
