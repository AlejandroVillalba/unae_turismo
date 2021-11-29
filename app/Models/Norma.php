<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Norma extends Model
{
    use HasFactory;

      // relacion muchos a muchos
      public function habitacions(){
        return $this->belongsTo(Habitacion::class);
    }
}
