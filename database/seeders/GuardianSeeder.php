<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Guardian::factory(10)->create();
    }
}
