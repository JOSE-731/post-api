<?php

namespace Database\Factories;

use App\Models\Comentarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Comentarios::class;

    public function definition()
    {
        return [
            'posts_id'=> $this-> faker->numberBetween(1,20),
            'contenido'  =>  $this->faker->sentence
        ];
    }
}
