<?php

namespace Database\Factories;

use App\Models\Rapor;
use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nip'     => fake()->unique()->numerify('198###############'), // 18 digit
            'nuptk'   => fake()->unique()->numerify('1#################'), // 16 digit
            'status'  => true,
        ];
    }
}
