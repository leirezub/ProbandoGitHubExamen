<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id' => $this->faker->numberBetween(4, 100),
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->name(),
            'dni' => $this->faker->numberBetween(100000000, 999999999).($this->faker->randomLetter()),
            'fecha_nacimiento' => $this->faker->dateTimeAD(),
            'vacunado' => $this->faker->numberBetween(0,1),
            'doctor_id' => 0
        ];
    }
}
