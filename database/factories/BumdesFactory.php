<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BumdesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nik" => $this->faker->nik(),
            "nama" => $this->faker->name(),
            "rt" => $this->faker->randomDigit(01, 20),
            "rw" => $this->faker->randomDigit(01, 06),
            "alamat" => $this->faker->address(),
            // "produk" => $this->

        ];
    }
}
