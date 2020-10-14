<?php

namespace Database\Factories;

use App\Models\Atividade;
use App\Models\Materia;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Materia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->numerify('CSI###'),
            'nome' => $this->faker->word,
            'atividade_id' => Atividade::factory(),
            'faltas' => $this->faker->randomDigit
        ];
    }
}
