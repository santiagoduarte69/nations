<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    //coloca la tabla a la que te conectaras
    protected $table = "countries";
    
    //clave primaria de la tabla
    protected $primaryKey = "country_id";


    //omitir campos de auditoria
    public $timestamps =  false;

     //relacion con region
     public function region(){
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function lenguajes(){
        return $this->belongsToMany(Language::class, 'country_languages', 'country_id', 'language_id');
     }


    use HasFactory;
}
