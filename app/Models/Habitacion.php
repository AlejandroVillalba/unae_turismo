<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Habitacion
 *
 * @property $id
 * @property $tipo_habitacions_id
 * @property $alojamiento_id
 * @property $detalle_habitacion_id
 * @property $nombre
 * @property $precio
 * @property $descripcion
 * @property $disponible
 * @property $created_at
 * @property $updated_at
 *
 * @property Alojamiento $alojamiento
 * @property DetalleHabitacion $detalleHabitacion
 * @property HabitacionHasNorma[] $habitacionHasNormas
 * @property TipoHabitacion $tipoHabitacion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Habitacion extends Model
{
    use HasFactory;
    static $rules = [
		'tipo_habitacions_id' => 'required',
		'alojamiento_id' => 'required',
		'detalle_habitacion_id' => 'required',
		'nombre' => 'required',
		'precio' => 'required',
		'descripcion' => 'required',
		'disponible' => 'required',
    ];


    protected $fillable = ['tipo_habitacions_id','alojamiento_id','detalle_habitacion_id','nombre','precio','descripcion','disponible'];


   
     // Relacion uno a muchos -> inversa
     public function alojamiento(){
        return $this->belongsTo(Alojamiento::class);
        }
    
        // Relacion uno a muchos -> inversa
       public function tipoHabitacions(){
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
