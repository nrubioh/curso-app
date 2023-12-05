<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videogame;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $videogame1 = new Videogame;
        $videogame1->name = "NBA";
        $videogame1->description = "Basketball";
        $videogame1->active = true;
        $videogame1->category_id = 4;
        $videogame1->save();

        $videogame2 = new Videogame;
        $videogame2->name = "FFIX";
        $videogame2->description = "RPG PLAY1";
        $videogame2->active = true;
        $videogame2->category_id = 1;
        $videogame2->save();

        $videogame3 = new Videogame;
        $videogame3->name = "Fornite";
        $videogame3->description = "Guns and rats";
        $videogame3->active = true;
        $videogame3->category_id = 1;
        $videogame3->save();

        $videogame4 = new Videogame;
        $videogame4->name = "WOW";
        $videogame4->description = "RPG online";
        $videogame4->active = true;
        $videogame4->category_id = 1;
        $videogame4->save();
    }
}

