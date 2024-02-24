<?php

namespace Database\Seeders;

use App\Enums\EUnitType;
use App\Models\Category;
use App\Models\Sphere;
use App\Models\Service;
use Illuminate\Database\Seeder;


class HourMasterSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = Sphere::create([
            'title' => 'Муж на час',
            'body' => 'Необходимо собрать мебель, повесить упавшую полочку, поменять лампочку, отремонтировать замок или заменить
            дверную ручку, а в доме, к сожалению, нет мужчины? Куда обращаться с такими мелкими бытовыми проблемами, которые не
            всегда женщина может решить сама. Компания «Мастера рядом» предлагает услугу «Муж на час». Подобные работы может
            выполнять и частный мастер, однако, это обойдется гораздо дороже.'
        ])->id;

        $cat = Category::create(['sphere_id' => $master, 'title' => 'Навеска на стену'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка карниза', 'price' => 300, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Навеска штор', 'price' => 150, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка жалюзи', 'price' => 400, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Навес картин', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка турника', 'price' => 950, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка ТВ на стену', 'price' => 1100, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка полок', 'price' => 300, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Навес зеркал', 'price' => 400, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка шведской стенки', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж сушки для белья', 'price' => 650, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Услуги электрика'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Диагностика электропроводки', 'price' => 600, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж и ремонт электропроводки', 'price' => 900, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Подключение кабеля к щитку', 'price' => 1000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Прокладка кабеля', 'price' => 70, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж автомата / Узо', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Сверление сквозных отверстии', 'price' => 300, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление', 'price' => 200, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж розетки, выключателя', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка люстры, бра, светильника', 'price' => 450, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Услуги сантехника'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Устранение течи', 'price' => 700, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Устранение  засора', 'price' => 900, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка раковины, умывальника', 'price' => 1200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка унитаза напольного', 'price' => 1300, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт унитаза', 'price' => 1000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка смесителя', 'price' => 950, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка фильтров для воды', 'price' => 500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка полотенцесушителя', 'price' => 1100, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт душевой кабины', 'price' => 1200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка сифона под ванну', 'price' => 950, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Плотник, ремонт мебели'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка входных дверей', 'price' => 1900, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж межкомнатных дверей', 'price' => 1900, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Замена и установка замков', 'price' => 550, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка и замена дверных ручек', 'price' => 400, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Врезка петель', 'price' => 890, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж варочной панели', 'price' => 650, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка мойки на кухне', 'price' => 700, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Сантехнический люк'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Демонтаж сантехнического люка (зависит от сложности)', 'price' => 300, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Изготовление и монтаж сантехнического люка', 'price' => 1300, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Изготовление и монтаж сантехнического шкафа', 'price' => 2500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт сантехнических шкафов и люков', 'price' => 450, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Вытяжка'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Демонтаж вытяжки (в зависимости от объёма работ)', 'price' => 270, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж вытяжки в ванной и туалете', 'price' => 400, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Перенос вытяжки', 'price' => 1000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Замена вентилятора в вытяжке', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
    }
}
