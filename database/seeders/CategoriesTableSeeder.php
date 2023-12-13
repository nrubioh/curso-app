<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        $category1 = new Category;
        $category1->name = "Sport";
        $category1->description = "Football, Tennis , Basketball";
        $category1->active = true;
        $category1->save();

        $category2 = new Category;
        $category2->name = "RPG";
        $category2->description = "FFIX, Mu, WoW";
        $category2->active = true;
        $category2->save();

        $category3 = new Category;
        $category3->name = "Shooter";
        $category3->description = "PUB-G, Fornite";
        $category3->active = true;
        $category3->save();

        $category4 = new Category;
        $category4->name = "Adventure";
        $category4->description = "HalfLife, GoW";
        $category4->active = true;
        $category4->save();

        $category5 = new Category;
        $category5->name = "Indie";
        $category5->description = "Fall guys, Hades, etc";
        $category5->active = true;
        $category5->save();
    }
}