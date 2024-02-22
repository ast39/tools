<?php

namespace Database\Seeders;

use App\Enums\EUserRole;
use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class WorkFlow extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Владелец',
            'login' => 'admin',
            'password' => Hash::make('@dmiN_39'),
            'role' => EUserRole::Admin->value,
            'note' => 'Рутовый пользователь',
        ]);



        $cat_1 = Category::create(['title' => 'Электрик']);

        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Автоматы, УЗО']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Выключатели']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Диагностика проводки']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Люстра']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Ремонт электропроводки']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Розетка']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Сборка электрошитка']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Светильники и Бра']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Штробление стен']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Электрик']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Электрика под ключ']);
        Service::create(['category_id' => $cat_1->category_id, 'title' => 'Электросчетчики']);



        $cat_2 = Category::create(['title' => 'Сантехник']);

        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Биде']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Ванна']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Водяные счетчики']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Водяные фильтры']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Гигиенический душ']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Джакузи']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Душевая кабина']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Инсталляция']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Мойка']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Отопление']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Полотенцесушитель']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Разводка канализации']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Разводка труб']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Раковина']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Сантехник']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Смеситель']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Унитаз']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Устранение засоров']);
        Service::create(['category_id' => $cat_2->category_id, 'title' => 'Устранение течи']);



        $cat_3 = Category::create(['title' => 'Муж на час']);

        Service::create(['category_id' => $cat_3->category_id, 'title' => 'Малярные, штукатурные работы']);
        Service::create(['category_id' => $cat_3->category_id, 'title' => 'Муж на час']);
        Service::create(['category_id' => $cat_3->category_id, 'title' => 'Плотник']);
        Service::create(['category_id' => $cat_3->category_id, 'title' => 'Укладка напольных покрытий']);
        Service::create(['category_id' => $cat_3->category_id, 'title' => 'Установка бытовой техники']);
        Service::create(['category_id' => $cat_3->category_id, 'title' => 'Установка и ремонт TV']);



        $cat_4 = Category::create(['title' => 'Ремонт бытовой техники']);
        $cat_5 = Category::create(['title' => 'Сборка мебели']);
        $cat_6 = Category::create(['title' => 'Ремонт квартир']);
        $cat_7 = Category::create(['title' => 'Плотник']);
    }
}
