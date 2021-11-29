<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleHabitacion extends Model
{
    use HasFactory;

    // Relacion uno a muchos -> inversa 
   public function habitacion(){
    return $this->belongsTo(Habitacion::class);
    }

}
