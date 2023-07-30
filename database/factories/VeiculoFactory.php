<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veiculo>
 */
class VeiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // unique = significa que a matricula que ele gerar será única; ??=letras; ##=números
            'matricula' =>$this->faker->unique()->bothify('??##??'),
            'marca' =>$this->faker->word(15),
            'modelo' =>$this->faker->word(15),
            'cor' =>$this->faker->hexColor(),
            'data' =>$this->faker->date(),
        ];
    }
}
