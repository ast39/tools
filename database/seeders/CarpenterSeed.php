<?php

namespace Database\Seeders;

use App\Enums\EUnitType;
use App\Models\Category;
use App\Models\Master;
use App\Models\Service;
use Illuminate\Database\Seeder;


class CarpenterSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = Master::create(['title' => 'Плотник'])->id;
    }
}
