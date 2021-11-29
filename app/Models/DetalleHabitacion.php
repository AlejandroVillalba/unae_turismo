<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleHabitacion
 *
 * @property $id
 * @property $cama
 * @property $cantidadCama
 * @property $cantidadPersona
 * @property $dimension
 * @property $banos
 * @property $created_at
 * @property $updated_at
 *
 * @property Habitacion[] $habitacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleHabitacion extends Model
{
    
    static $rules = [
		'cama' => 'required',
		'cantidadCama' => 'required',
		'cantidadPersona' => 'required',
		'dimension' => 'required',
		'banos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cama','cantidadCama','cantidadPersona','dimension','banos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function habitacions()
    {
        return $this->hasMany('App\Models\Habitacion', 'detalle_habitacion_id', 'id');
    }
    

}
