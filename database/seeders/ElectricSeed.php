<?php

namespace Database\Seeders;

use App\Enums\EUnitType;
use App\Models\Category;
use App\Models\Sphere;
use App\Models\Service;
use Illuminate\Database\Seeder;


class ElectricSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $master = Sphere::create(['title' => 'Электрик'])->id;


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Автоматы, УЗО',
            'body' => 'Желаете обезопасить себя и близких от несчастных случаев, связанных с домашней электропроводкой и подключенными
            устройствами? Вызывайте мастера из службы «Мастера рядом»! Установим автоматы УЗО в удобное для вас время и по низким,
            доступным для всех, ценам.'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка электрического щитка', 'price' => 1450, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж автомата, диф. автомата', 'price' => 450, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж УЗО', 'price' => 280, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж счетчика электроэнергии', 'price' => 3000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж стабилизатора напряжения', 'price' => 1250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж распределительной коробки', 'price' => 850, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж распаечной коробки', 'price' => 950, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Выключатели'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Монтаж клавишного выключателя', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж сенсорного выключателя', 'price' => 620, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж проходного выключателя', 'price' => 550, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж автоматического выключателя', 'price' => 750, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж блока выключателей', 'price' => 650, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт выключателя', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Демонтаж выключателя', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд мастера на дом', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Диагностика проводки'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Аварийный выезд ( круглосуточно)', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Диагностика электропроводки', 'price' => 450, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Обрыв в стене, сложная диагностика спец. оборудованием', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Прокладка кабеля', 'price' => 75, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж кабель-канала', 'price' => 65, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Прокладка гофры', 'price' => 60, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Подключение кабеля к щитку', 'price' => 700, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт электропроводки', 'price' => 500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Замена электропроводки', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд мастера на дом', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Люстра'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка люстры', 'price' => 550, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Демонтаж люстры', 'price' => 300, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт люстры', 'price' => 500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка крюка', 'price' => 880, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка точечного светильника', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка светодиодной ленты', 'price' => 550, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка бра', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка трансформатора', 'price' => 220, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт осветительных приборов', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка/замена ламп', 'price' => 40, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Демонтаж осветительного прибора', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка люстры с вентилятором', 'price' => 1750, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'амена лампы, патрона, мелкий ремонт люстры', 'price' => 150, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд мастера на дом', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Ремонт электропроводки'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Прозвонка кабеля между точками', 'price' => 100, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Разводка, прокладка электропроводки (кабеля)', 'price' => 70, 'unit' => EUnitType::MeterLinear->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт, устранение обрыва, короткого замыкания', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Прокладка кабеля на скобах по бетону', 'price' => 90, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Сложная диагностика проводки (без штробления стен)', 'price' => 2500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Затяжка кабеля в гофру', 'price' => 30, 'unit' => EUnitType::MeterLinear->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж накладных распаечных коробок', 'price' => 240, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд мастера на дом', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Розетка'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Монтаж электрической розетки', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка влагозащищенной розетки (ванная)', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж интернет-розетки (сетевой)', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж TV-розетки (телевизионной)', 'price' => 290, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж телефонной розетки', 'price' => 270, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж розетки для электроплиты', 'price' => 850, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж розетки для стиральной машины', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж блока розеток (2-е и более)', 'price' => 450, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт розетки', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Демонтаж розетки', 'price' => 100, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд мастера на дом', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Сборка электрошитка'])->id;

//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Светильники и Бра'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка светильника', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт светильника', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка точечного светильника', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка светодиодной ленты', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка бра', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка трансформатора', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт осветительных приборов', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка/замена ламп', 'price' => 40, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Демонтаж осветительного прибора', 'price' => 100, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд мастера на дом', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Штробление стен'])->id;

//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Электрик'])->id;

//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
//        Service::create(['category_id' => $cat, 'title' => 'Выезд', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Электрика под ключ'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Монтаж/ замена электропроводки в квартире ~32 м2', 'price' => 23000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж/ замена электропроводки в квартире ~52 м2', 'price' => 38000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж/ замена электропроводки в квартире ~72 м2', 'price' => 65000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'амена проводки в комнате', 'price' => 5500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Частичная замена проводки', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create(['sphere_id' => $master, 'title' => 'Электросчетчики'])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка счетчика электрического — однофазного', 'price' => 3000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка счетчика электрического — трехфазного', 'price' => 3800, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Демонтаж электрического счетчика', 'price' => 600, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);
    }
}
