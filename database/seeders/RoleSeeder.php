<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'administrator',
                'description' => 'Полный доступ ко всем функциям',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'florist',
                'description' => 'Создает и собирает букеты',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'seller',
                'description' => 'Продавец, оформляет заказы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'seller-florist',
                'description' => 'Совмещает роль продавца и флориста',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
