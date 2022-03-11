<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Posts::class;

    public function definition()
    {
        return [
            'categoria_id'=> $this-> faker->numberBetween(1,20),
            'titulo'  =>  $this->faker->sentence,
            'contenido'  =>  $this->faker->text
        ];
    }
}
