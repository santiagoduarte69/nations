<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

     //coloca la tabla a la que te conectaras
     protected $table = "languages";
    
     //clave primaria de la tabla
     protected $primaryKey = "language_id";
 
 
     //omitir campos de auditoria
     public $timestamps =  false;

     //relacion m a m con paises
     public function paises(){
        return $this->belongsToMany(Country::class, 'country_languages', 'language_id', 'country_id');
     }

    use HasFactory;
}
