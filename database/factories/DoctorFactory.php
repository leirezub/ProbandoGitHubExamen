<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
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
            'numpacientes' => $this->faker->numberBetween(0, 100)
        ];
    }
}
