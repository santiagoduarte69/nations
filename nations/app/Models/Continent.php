<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //coloca la tabla a la que te conectaras
    protected $table = "continents";
    
    //clave primaria de la tabla
    protected $primaryKey = "continent_id";


    //omitir campos de auditoria
    public $timestamps =  false;
    
    //relacion entre continente y regiones
    public function regiones(){
        return $this->hasMany(Region::class, 'continent_id');
    }

    //relacion entre continente y pais
    public function paises(){
        return $this->hasManyThrough( Country::class, Region::class, 'continent_id', 'region_id', 'continent_id', 'region_id');
    }

    use HasFactory;
}
