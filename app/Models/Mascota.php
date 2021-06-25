<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    //Relacion 1:M mascota-cliente
    public function cliente(){
     return $this->belongsTo('App\Models\Cliente');
    }

    //Relacion M:N mascota-servicio
     public function servicios(){
        return $this->belongsToMany('App\Models\Servicio');
    }
}
