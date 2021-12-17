<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Servicio extends Model
{
    use HasFactory;
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['nombre'];


    public function alojamientosHasServicios()
    {
        return $this->hasMany('App\Models\AlojamientosHasServicio', 'servicio_id', 'id');
    }
    

}
