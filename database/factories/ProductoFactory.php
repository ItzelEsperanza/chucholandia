<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nombre'=> $this->faker->word(4),
          'marca'=> $this->faker->company(),
          'descripcion'=> $this->faker->paragraph(),
          'categoria'=> $this->faker->randomElement(['Limpieza','Medicamentos','Accesorios','Alimentos']),
          'precio'=> $this->faker->numberBetween(50,1000)
        ];
    }
}
