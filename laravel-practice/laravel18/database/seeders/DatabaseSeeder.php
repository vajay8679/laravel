<?php

namespace Database\Seeders;

use App\Models\student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // student::factory()->count(10)->create();
        $this->call([
            StudentSeeder::class
        ]);

    }
}
