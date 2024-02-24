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


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Выключатели',
            'body' => 'Требуется профессиональный, с гарантией, монтаж выключателя? Звоните в компанию «Мастера рядом», и вызывайте мастера!
            У нас дешевые цены и превосходные специалисты с золотыми руками. Мы работаем по Москве и области, принимаем заявки от владельцев
            частных домов и квартир, юридических лиц.',
        ])->id;

        Service::create(['category_id' => $cat, 'title' => 'Монтаж клавишного выключателя', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж сенсорного выключателя', 'price' => 620, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж проходного выключателя', 'price' => 550, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж автоматического выключателя', 'price' => 750, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж блока выключателей', 'price' => 650, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт выключателя', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Демонтаж выключателя', 'price' => 200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд мастера на дом', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Диагностика проводки',
            'body' => 'Прогресс не стоит на месте. Ежегодно в домах, квартирах и офисах добавляются все новые бытовые приборы, гаджеты,
            устройства, делающие жизнь владельцев легче, интереснее, насыщеннее. Но, при этом в геометрической прогрессии растут нагрузки
            на электропроводку. В домах старой постройки проводка явно не соответствует современным нормам, и с нею довольно часто возникают
            проблемы. В новостройках хозяева изначально закладывают в проекте необходимую мощность, но и там со временем требуется помощь
            специалиста-электрика.',
        ])->id;

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


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Люстра',
            'body' => 'Красивая авторская люстра завершает оформление комнаты изящным штрихом. Она подчеркивает выбранный интерьерный
            стиль комнаты, обеспечивает комфортное для глаз освещение. Является истинным украшением помещения. Чтобы великолепное изделие
            радовало владельцев в течение многих лет, его необходимо подключить с соблюдением технических условий и некоторых нюансов,
            известных профессионалам.',
        ])->id;

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


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Ремонт электропроводки',
            'body' => 'Кто-то решил включить чайник при работающей стиральной машине, и вы остались без света? Пришло время делать ремонт
            электропроводки. «Мастера рядом» – это специалисты, которые недорого помогут решить проблемы с электропитанием в офисе, частном
            доме, квартире. Работаем в Москве и области, приедем в удобное для вас время.',
        ])->id;

        Service::create(['category_id' => $cat, 'title' => 'Прозвонка кабеля между точками', 'price' => 100, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Разводка, прокладка электропроводки (кабеля)', 'price' => 70, 'unit' => EUnitType::MeterLinear->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Ремонт, устранение обрыва, короткого замыкания', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Прокладка кабеля на скобах по бетону', 'price' => 90, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Сложная диагностика проводки (без штробления стен)', 'price' => 2500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Затяжка кабеля в гофру', 'price' => 30, 'unit' => EUnitType::MeterLinear->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж накладных распаечных коробок', 'price' => 240, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд мастера на дом', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Розетка',
            'body' => 'Компания «Мастера рядом» оказывает услуги по установке розеток в Москве и области. Наши электрики имеют большой
            профессиональный стаж, выполняют поставленные перед ними задачи оперативно и со знанием дела. На все проведенные работы дается
            годовая гарантия.',
        ])->id;

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


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Сборка электрошитка',
            'body' => 'Вызов мастера на дом от компании «Мастера рядом» – это высококачественные услуги при минимальных ценах.
            Выполняем заявки на сборку электрощитов от владельцев частных домов и квартир, организаций, расположенных в Москве и области.',
        ])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка накладного электрощита', 'price' => 2200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 6 модулей с нишей в стене — ГКЛ', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 6 модулей с нишей в стене — кирпич', 'price' => 2000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 6 модулей с нишей в стене — бетон', 'price' => 2800, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 12 модулей с нишей в стене — ГКЛ', 'price' => 1700, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 12 модулей с нишей в стене — кирпич', 'price' => 2650, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 12 модулей с нишей в стене — бетон', 'price' => 3500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 18 модулей с нишей в стене — ГКЛ', 'price' => 1750, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 18 модулей с нишей в стене — кирпич', 'price' => 3550, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 18 модулей с нишей в стене — бетон', 'price' => 4200, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 24 модуля с нишей в стене — ГКЛ', 'price' => 1900, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 24 модуля с нишей в стене — кирпич', 'price' => 3800, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 24 модуля с нишей в стене — бетон', 'price' => 4600, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 36 модулей с нишей в стене — ГКЛ', 'price' => 2100, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 36 модулей с нишей в стене — кирпич', 'price' => 4100, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 36 модулей с нишей в стене — бетон', 'price' => 5100, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 54 модуля с нишей в стене — ГКЛ', 'price' => 2600, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 54 модуля с нишей в стене — кирпич', 'price' => 5000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка внутреннего электрощита на 54 модуля с нишей в стене — бетон', 'price' => 7000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Подключение к главному щиту', 'price' => 555, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Светильники и Бра',
            'body' => 'Современные идеи интерьерного дизайна предусматривают наличие разнообразных светильников. С их помощью
            подсвечивают рабочие поверхности, выделяют функциональные зоны, акцентируют внимание на элементах дизайна. Но,
            приобрести подходящую модель светильника – это половина дела. Его требуется правильно установить на выбранное место.
            Именно такие услуги в Москве и области оказывают профессиональные электрики из компании «Мастера рядом».',
        ])->id;

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


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Штробление стен',
            'body' => 'Чтобы проложить электрический кабель, установить розетки, выключатели, провести другие виды коммуникаций,
            необходимо штробление стен. Специальный инструмент поможет сделать технические углубления, проложить канавки в бетоне
            или кирпиче. Самостоятельно проложить штробу очень проблематично, но «Мастера рядом» недорого выполнят эту работу для
            вас. Мы работаем в Москве и области, согласуем удобное для вас время работы.',
        ])->id;

        Service::create(['category_id' => $cat, 'title' => 'Штробление гипсокартонной (гипсолитовой) стены под электропроводку', 'price' => 400, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление кирпичной стены/пола под электропроводку', 'price' => 400, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление бетонной стены/пола под электропроводку', 'price' => 600, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Заделка штроб', 'price' => 150, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление потолка под электропроводку', 'price' => 550, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление стен под трубы водоснабжения', 'price' => 650, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление стен под сантехнические (канализационные) трубы', 'price' => 600, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление отверстия под электроточку в стене ГКЛ', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление отверстия под электроточку в кирпичной стене', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление отверстия под электроточку в бетонной стене', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Прокладка кабеля', 'price' => 40, 'unit' => EUnitType::MeterLinear->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Сверление подрозетника', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Электрик',
            'body' => 'Вы приобрели дорогую стильную люстру, и ее требуется правильно установить? Нужно провести электропроводку
            в новостройке? Требуется поменять выключатель или розетку? Вызывайте мастера!',
        ])->id;

        Service::create(['category_id' => $cat, 'title' => 'Аварийный выезд (круглосуточно)', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Диагностика электропроводки', 'price' => 450, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Обрыв в стене, сложная диагностика спец. оборудованием', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж и ремонт электропроводк', 'price' => 900, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Частичная замена электропроводки', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Прозвонка кабеля', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж щитка с автоматами', 'price' => 1450, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Подключение кабеля к щитку', 'price' => 1700, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Прокладка кабеля', 'price' => 75, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж автомата / Узо', 'price' => 280, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Сверление сквозных отверстии', 'price' => 170, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Штробление', 'price' => 600, 'unit' => EUnitType::MeterLinear->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж розетки, выключателя', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка люстры, бра, светильника', 'price' => 250, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Установка полотенцесушителя', 'price' => 700, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Электрика под ключ ( см. подробно в разделе)', 'price' => 350, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Электрика под ключ',
            'body' => 'Согласитесь, включать электроприборы по одному, чтобы не выбивало пробки – очень неудобно. Даже в новостройках
            могут быть проблемы с электропроводкой. Владельцы вторичного жилья – панельных домов, «хрущевок» — и вовсе должны внимательно
            следить за электропитанием в квартире. Часто исправить ситуацию с ограничением энергопотребления может только замена
            электропроводки. Чтобы работы были выполнены быстро, качественно и в соответствии с техническими требованиями, пригласите
            специалистов «Мастера рядом».',
        ])->id;

        Service::create(['category_id' => $cat, 'title' => 'Монтаж/ замена электропроводки в квартире ~32 м2', 'price' => 23000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж/ замена электропроводки в квартире ~52 м2', 'price' => 38000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Монтаж/ замена электропроводки в квартире ~72 м2', 'price' => 65000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'амена проводки в комнате', 'price' => 5500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Частичная замена проводки', 'price' => 1500, 'unit' => EUnitType::Item->value, 'from' => 1]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);


        $cat = Category::create([
            'sphere_id' => $master,
            'title' => 'Электросчетчики',
            'body' => 'Компания «Мастера рядом» предлагает услуги по установке счетчиков электроэнергии в частных и многоквартирных домах,
            а также для коммерческих и муниципальных организаций г. Москвы и области. Согласно положениям законодательства РФ, все объекты,
            потребляющие электроэнергию из общей сети, должны быть оборудованы электросчетчиками. Оплата за потребленный ресурс
            насчитывается по показаниям прибора учета. В случае обнаружения неисправности, потребитель должен известить об этом
            организацию-поставщика, и заменить счетчик.',
        ])->id;

        Service::create(['category_id' => $cat, 'title' => 'Установка счетчика электрического — однофазного', 'price' => 3000, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Установка счетчика электрического — трехфазного', 'price' => 3800, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Демонтаж электрического счетчика', 'price' => 600, 'unit' => EUnitType::Item->value, 'from' => 0]);
        Service::create(['category_id' => $cat, 'title' => 'Выезд и оценка работ', 'price' => 0, 'unit' => EUnitType::Item->value, 'from' => 0]);
    }
}
