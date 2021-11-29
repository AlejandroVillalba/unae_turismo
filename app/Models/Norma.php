<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Norma
 *
 * @property $id
 * @property $nombre
 * @property $ingreso
 * @property $salida
 * @property $created_at
 * @property $updated_at
 *
 * @property HabitacionHasNorma[] $habitacionHasNormas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Norma extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ingreso' => 'required',
		'salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ingreso','salida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function habitacionHasNormas()
    {
        return $this->hasMany('App\Models\HabitacionHasNorma', 'norma_id', 'id');
    }
    

}
