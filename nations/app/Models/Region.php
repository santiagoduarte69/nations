<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //coloca la tabla a la que te conectaras
    protected $table = "regions";
    
    //clave primaria de la tabla
    protected $primaryKey = "region_id";


    //omitir campos de auditoria
    public $timestamps =  false;
       
    //relacion entre region y pais
    public function paises(){
        return $this->hasMany(Country::class, 'region_id');
    }

    //relacion entre region y continente
    public function continente(){
        return $this->belongsTo(Continent::class, 'continent_id');
    }


    use HasFactory;
}
