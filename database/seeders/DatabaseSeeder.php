<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\VideogameFactory;
use Illuminate\Database\Seeder;
use App\Models\Videogame;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CategoriesTableSeeder::class,
            VideogamesTableSeeder::class,
        ]);
        Videogame::factory(200)->create();
    }
}
