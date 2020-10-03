<?php

namespace Database\Factories;

use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;

class PessoaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pessoa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(null) ,
            'tipo' => $this->faker->randomElement($a = array('A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-')),
        ];
    }
}
