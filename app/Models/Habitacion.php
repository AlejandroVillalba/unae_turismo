<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

   // Relacion uno a muchos -> inversa
   public function alojamiento(){
    return $this->belongsTo(Alojamiento::class);
    }

    // Relacion uno a muchos -> inversa
   public function tipoHabitacion(){
    return $this->belongsTo(TipoHabitacion::class);
    }

    //relacion uno a mucho
    public function detalleHabitacions(){
        return $this->hasMany(DetalleHabitacion::class);
    }

     // relacion muchos a muchos
     public function normas(){
        return $this->belongsTo(Norma::class);
    }
}
