<?php

namespace Database\Factories;

use App\Models\Atividade;
use App\Models\Materia;
use App\Models\User;
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
            'user_id' => User::factory(),
            'faltas' => $this->faker->randomDigit
        ];
    }
}
