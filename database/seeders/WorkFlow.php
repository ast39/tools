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
    }
}
