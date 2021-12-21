<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Norma extends Model
{
    use HasFactory;
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $fillable = ['nombre'];


   
    public function habitacionHasNormas()
    {
        return $this->hasMany('App\Models\HabitacionHasNorma', 'norma_id', 'id');
    }
    

}
