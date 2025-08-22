<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User; // ✅ make sure this is included

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'notes' => $this->faker->sentence(20),
            'user_id' => User::factory(), // ✅ generates a user if needed
        ];
    }
}
