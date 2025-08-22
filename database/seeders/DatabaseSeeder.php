<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Note;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 5 users, each with 10 notes
        User::factory(5)
            ->has(Note::factory(10))
            ->create();
    }
}
