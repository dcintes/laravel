<?php

namespace Database\Factories;

use App\Models\Noticia;
use App\Models\Autor;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titol' => $this->faker->sentence(),
            'data_publicacio' => $this->faker->dateTimeBetween('-1 year','-1 days'),
            'contingut' => $this->faker->text(2000),
            'url_imatge' => $this->faker->imageUrl(640, 480, 'animals', true),
            'autor_id' => Autor::inRandomOrder()->first()->id,
            'categoria_id' => Categoria::inRandomOrder()->first()->id
        ];
    }
}
