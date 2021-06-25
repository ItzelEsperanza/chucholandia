<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicios= new Servicio;

        $servicios->nombre='Corte de pelo';
        $servicios->precio='200 pesos';
        $servicios->descripcion='Contamos con peluqueria canina y felina';
        $servicios->save();

       $servicios= new Servicio;
        $servicios->nombre='Consulta';
        $servicios->precio='200 pesos';
        $servicios->descripcion='Brindamos atención y tratamientos especializados para tu mascota.';
        $servicios->save();

        $servicios= new Servicio;
        $servicios->nombre='Baño';
        $servicios->precio='250 pesos';
        $servicios->descripcion='Limpiamos y trtamos el pelo de tu mascota con los mejores productos para que tenga un pelaje reluciente';
        $servicios->save();

       $servicios= new Servicio;
        $servicios->nombre='Baño y corte de pelo';
        $servicios->precio='400 pesos';
        $servicios->descripcion='Servicio dos en uno para tu mascota. Limpiamos y tratamos el pelo de tu mascota, reduciendo la probabilidad de condiciones dermatológicas';
        $servicios->save();

       $servicios= new Servicio;
        $servicios->nombre='Hotel para perros y gatos';
        $servicios->precio='150 pesos por noche';
        $servicios->descripcion='!Cuidamos de tus mascotas mientras te encuentras fuera!';
        $servicios->save();

       $servicios= new Servicio;
        $servicios->nombre='Vacunación';
        $servicios->precio='100 pesos';
        $servicios->descripcion='Protegemos la salud de tus macotas, asegurate de que cuente con sus vacunas y reduce sus riesgos de enfermedad para una vida larga y saludable';
        $servicios->save();

        $servicios= new Servicio;
        $servicios->nombre='Rayos X';
        $servicios->precio='Varibale según radiografía.';
        $servicios->descripcion='Proporcionamos Rayos X para identificar y tratar las lesiones de tu mascota';
        $servicios->save();

        $servicios= new Servicio;
        $servicios->nombre='Ecografía';
        $servicios->precio='Precio varibale, según tipo ecografía';
        $servicios->descripcion='Facilita la exploración y dignóstico de tu mascota.';
        $servicios->save();

        $servicios= new Servicio;
        $servicios->nombre='Adiestramiento Canino';
        $servicios->precio='400 pesos por sesión';
        $servicios->descripcion='Entrenamiento intensivo. Analisamos el comportamiento de tu mascota ayudamos a educarlo y entrenarlo';
        $servicios->save();

    }
}
