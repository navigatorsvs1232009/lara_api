<?php

namespace Database\Factories;

use App\Models\Desk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeskList>
 */
class DeskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => random_int(1, 100),
            'name'=> $this->faker->title(20),
            'desk_id'=> Desk::get()->random()->id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
