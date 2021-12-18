<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TipoHabitacion extends Model
{
    use HasFactory;
    
    static $rules = [
		'nombre' => 'required',
    ];
   
    protected $fillable = ['nombre'];


   //relacion uno a mucho
   public function habitacions(){
    return $this->hasMany(Habitacion::class);
  }
    

}
