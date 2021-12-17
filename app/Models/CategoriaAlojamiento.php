<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoriaAlojamiento extends Model
{
    use HasFactory;
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 10; //paginacion

    
    protected $fillable = ['nombre'];



    //relacion uno a mucho
    public function alojamientos(){
    return $this->hasMany(Alojamiento::class);
    }

}
