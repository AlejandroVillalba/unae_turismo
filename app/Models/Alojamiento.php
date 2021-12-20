<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Alojamiento
 *
 * @property $id
 * @property $user_id
 * @property $categoria_alojamiento_id
 * @property $nombre
 * @property $slug
 * @property $imagenes
 * @property $direccion
 * @property $telefono
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property AlojamientosHasServicio[] $alojamientosHasServicios
 * @property CategoriaAlojamiento $categoriaAlojamiento
 * @property Habitacion[] $habitacions
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alojamiento extends Model
{
    use HasFactory;

    static $rules = [
		'user_id' => 'required',
		'categoria_alojamiento_id' => 'required',
		'nombre' => 'required',
		'slug' => 'required',
		'imagenes' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'descripcion' => 'required',
    ];

  
    protected $fillable = ['user_id','categoria_alojamiento_id','nombre','slug','imagenes','direccion','telefono','descripcion','nombreContacto'];



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
