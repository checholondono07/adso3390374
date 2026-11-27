<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new \App\Models\Pet;
        $pet->name = 'Pocho';
        $pet->kind = 'Dog';
        $pet->weight = 10.4;
        $pet->age = 1;
        $pet->breed = 'corgi';
        $pet->location = 'Manizales';
        $pet->description = 'Friendly and playful dog looking for a loving home.';
        $pet->save();

        $pet = new \App\Models\Pet;
        $pet->name = 'Michi';
        $pet->kind = 'cat';
        $pet->weight = 4.5;
        $pet->age = 3;
        $pet->breed = 'Maine Coon';
        $pet->location = 'Bogota D.C.';
        $pet->description = 'Big & Fluffy pet, Christmas Danger';
        $pet->save();

        $pet = new \App\Models\Pet;
        $pet->name = 'Pepo';
        $pet->kind = 'Pig';
        $pet->weight = 25.2;
        $pet->age = 5;
        $pet->breed = 'Mini';
        $pet->location = 'Cali';
        $pet->description = 'Very smart, Carefully with chocolate';
        $pet->save();
    }
}
