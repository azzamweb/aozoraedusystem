<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Tutor::factory(10)->create();
    }
}
