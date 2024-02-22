<?php

namespace Database\Seeders;

use App\Enums\EUnitType;
use App\Models\Category;
use App\Models\Master;
use App\Models\Service;
use Illuminate\Database\Seeder;


class PlumberSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = Master::create(['title' => 'Сантехник'])->id;

        $cat = Category::create(['master_id' => $master, 'title' => 'Биде'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Ванна'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Водяные счетчики'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Водяные фильтры'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Гигиенический душ'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Джакузи'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Душевая кабина'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Инсталляция'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Мойка'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Отопление'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Полотенцесушитель'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Разводка канализации'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Разводка труб'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Раковина'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Сантехник'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Смеситель'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Унитаз'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Устранение засоров'])->id;
        $cat = Category::create(['master_id' => $master, 'title' => 'Устранение течи'])->id;
    }
}
