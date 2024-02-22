<?php

namespace Database\Seeders;

use App\Enums\EUnitType;
use App\Models\Category;
use App\Models\Sphere;
use App\Models\Service;
use Illuminate\Database\Seeder;


class TechnicSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = Sphere::create(['title' => 'Ремонт бытовой техники'])->id;
    }
}
