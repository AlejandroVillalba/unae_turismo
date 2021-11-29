<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaAlojamiento
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Alojamiento[] $alojamientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CategoriaAlojamiento extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alojamientos()
    {
        return $this->hasMany('App\Models\Alojamiento', 'categoria_alojamiento_id', 'id');
    }
    

}
