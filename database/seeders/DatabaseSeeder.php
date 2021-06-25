<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto; //SE AGREGA LIBRERIA DEL MODELO!!!!
use App\Models\Servicio; //Modelo Servicio porque tiene un seeder

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       $this->call(ProductoSeeder::class);
       $this->call(ServicioSeeder::class);
    }
}
