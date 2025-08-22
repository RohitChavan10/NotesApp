<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    \App\Models\Note::create(['note' => 'Seeder note 1']);
    \App\Models\Note::create(['note' => 'Seeder note 2']);
}
}
