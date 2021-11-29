<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

   // Relacion uno a muchos -> inversa

   public function alojamiento(){
    return $this->belongsTo(Alojamiento::class);
    }
}
