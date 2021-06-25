<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

     //Relacion M:N servicio-cliente
     public function clientes(){
        return $this->belongsToMany('App\Models\Cliente');
    }

    //Relacion M:N mascota-cliente
     public function mascotas(){
        return $this->belongsToMany('App\Models\Mascota');
    }
}
