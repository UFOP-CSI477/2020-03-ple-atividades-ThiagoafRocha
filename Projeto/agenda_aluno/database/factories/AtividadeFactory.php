<?php

namespace Database\Factories;

use App\Models\Atividade;
use App\Models\Materia;
use Illuminate\Database\Eloquent\Factories\Factory;

class AtividadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Atividade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'materia_id' => Materia::factory(),
            'tipo' => $this->faker->randomElement(array(1, 2, 3)),
            'descricao' => $this->faker->sentence(7, true),
            'data_entrega' => $this->faker->date(),
            'nota' => $this->faker->randomDigit,
        ];
    }
}
