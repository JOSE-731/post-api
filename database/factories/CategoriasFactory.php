<?php

namespace Database\Factories;

use App\Models\Categorias;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Categorias::class;
    
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence,
        ];
    }
}
