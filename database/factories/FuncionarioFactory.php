<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'dtNascto' => $this->faker->date('Y-m-d','2010-12-31'),
            'salario' => $this->faker->randomFloat(10,1200,5000),
            'status' => 'A',
        ];
    }
}
