<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaAlojamiento extends Model
{
    use HasFactory;

     //relacion uno a mucho
     public function alojamientos(){
        return $this->hasMany(Alojamiento::class);
    }
}
