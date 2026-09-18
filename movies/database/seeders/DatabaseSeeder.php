<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Gender::factory()->createMany([
            ['title' => 'Male'],
            ['title' => 'Female'],
            ['title' => 'Other'],   
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'gender_id' => 1,
        ]);

        Film::factory(10)->create();

        Role::factory(10)->create();

        
        

    }
}
