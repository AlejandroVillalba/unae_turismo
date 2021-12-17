<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DetalleHabitacion extends Model
{
    use HasFactory;
    
    static $rules = [
		'cama' => 'required',
		'cantidadCama' => 'required',
		'cantidadPersona' => 'required',
		'dimension' => 'required',
		'banos' => 'required',
    ];

    protected $perPage = 20;

    
    protected $fillable = ['cama','cantidadCama','cantidadPersona','dimension','banos'];


   // Relacion uno a muchos -> inversa 
   public function habitacion(){
    return $this->belongsTo(Habitacion::class);
   }

}
