<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //Relacion 1:M cliente-mascota
    public function mascotas(){
        return $this->hasMany('App\Models\Mascota');
    }

     //Relacion M:N cliente-servicio
     public function servicios(){
        return $this->belongsToMany('App\Models\Servicio');
    }
}
