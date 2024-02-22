<?php

namespace Database\Seeders;

use App\Enums\EUnitType;
use App\Models\Category;
use App\Models\Master;
use App\Models\Service;
use Illuminate\Database\Seeder;


class HourMasterSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = Master::create(['title' => 'Муж на час'])->id;

        $cat = Category::create(['master_id' => $master, 'title' => 'Малярные, штукатурные работы'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Муж на час'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Плотник'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Укладка напольных покрытий'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Установка бытовой техники'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Установка и ремонт TV'])->id;
    }
}
