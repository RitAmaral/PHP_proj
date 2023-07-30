<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empregado>
 */
class EmpregadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(), //name e address e city sao palavras reservadas, vão criar nomes, moradas, e cidades random.
            'morada' => fake()->address(),
            'localidade' => fake()->city()
        ];
    }
}
