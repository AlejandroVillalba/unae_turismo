<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Alojamiento extends Model
{
    use HasFactory;

    static $rules = [
		'user_id' => 'required',
		'categoria_alojamiento_id' => 'required',
		'nombre' => 'required',
		'slug' => 'required',
		// //'imagenes' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'descripcion' => 'required',
    ];

  
    protected $fillable = ['user_id','categoria_alojamiento_id','nombre','slug','imagenes','direccion','contacto_nombre', 'telefono','descripcion'];



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
