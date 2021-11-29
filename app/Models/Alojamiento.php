<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    use HasFactory;

    // Relacion uno a muchos -> inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoriaAlojamiento(){
        return $this->belongsTo(CategoriaAlojamiento::class);
    }

    //relacion uno a mucho
    public function habitacions(){
        return $this->hasMany(Habitacion::class);
    }

      // relacion muchos a muchos
      public function servicios(){
        return $this->belongsTo(Servicio::class);
    }
}

