<?php

namespace Database\Seeders;

use App\Enums\EUnitType;
use App\Models\Category;
use App\Models\Sphere;
use App\Models\Service;
use Illuminate\Database\Seeder;


class CarpenterSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = Sphere::create([
            'title' => 'Плотник',
            'body' => 'Во время проведения ремонта в любом помещении большой объем работы приходится на плотника и
            столяра. Ни в одном интерьере нельзя обойтись без конструкций и изделий из дерева. Тем более, в последнее
            время этот материал стал очень популярным у дизайнеров.',
        ])->id;

        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Плотницкие работы',
            'body' => 'Плотницкие услуги не предполагают чистовой отделки деревянных поверхностей. Мастерство хорошего
            плотника заключается в умении правильно произвести рубку, пиление, строгание и др. Кроме того, сделать
            верный подбор дерева, продумать способ соединения различных элементов деревянной конструкции.'
        ])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка входных дверей', 'price' => 1900, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж межкомнатных дверей', 'price' => 1900, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Замена и установка замков', 'price' => 550, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка и замена дверных ручек', 'price' => 400, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Врезка петель', 'price' => 890, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж варочной панели', 'price' => 650, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка мойки на кухне', 'price' => 700, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);
    }
}
