<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Noticia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Autor::factory()->count(5)->create();
        Categoria::factory()->count(15)->create();
        Noticia::factory()->count(100)->create();
    }
}
