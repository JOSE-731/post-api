<?php

namespace Database\Seeders;

use App\Models\Categorias;
use App\Models\Comentarios;
use App\Models\Posts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Categorias::factory(30)->create();
        Posts::factory(30)->create();
        Comentarios::factory(30)->create();
    }
}
