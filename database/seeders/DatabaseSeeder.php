<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //first_seed
        // \App\Models\Admin::factory(5)->create();

        //second_seed
        // \App\Models\School::factory(5)->create();

        //third_seed
        // \App\Models\Staff::factory(10)->create();

        //fourth_seed
        // \App\Models\Student::factory(10)->create();

        //fifth_seed
        \App\Models\Guardian::factory(10)->create();

    }
}
