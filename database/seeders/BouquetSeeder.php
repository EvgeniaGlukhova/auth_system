<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BouquetSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bouquets')->insert([
            [
                'name' => 'Весенний букет',
                'price' => 450.00,
                'description' => 'Нежный весенний букет из тюльпанов',
                'quantity' => 30,
                'production_date' => '2026-05-01',
                'expiry_date' => '2026-05-10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Романтический букет',
                'price' => 850.00,
                'description' => 'Букет из красных роз',
                'quantity' => 25,
                'production_date' => '2026-05-02',
                'expiry_date' => '2026-05-12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Свадебный букет',
                'price' => 1200.00,
                'description' => 'Роскошный свадебный букет',
                'quantity' => 15,
                'production_date' => '2026-05-03',
                'expiry_date' => '2026-05-15',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет невесты',
                'price' => 1500.00,
                'description' => 'Элегантный букет для невесты',
                'quantity' => 10,
                'production_date' => '2026-05-04',
                'expiry_date' => '2026-05-18',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Осенний букет',
                'price' => 550.00,
                'description' => 'Яркий осенний букет',
                'quantity' => 20,
                'production_date' => '2026-05-05',
                'expiry_date' => '2026-05-15',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет из пионов',
                'price' => 950.00,
                'description' => 'Нежный букет из пионов',
                'quantity' => 18,
                'production_date' => '2026-05-06',
                'expiry_date' => '2026-05-20',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет из лилий',
                'price' => 780.00,
                'description' => 'Ароматный букет из лилий',
                'quantity' => 22,
                'production_date' => '2026-05-07',
                'expiry_date' => '2026-05-22',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Алые паруса"',
                'price' => 680.00,
                'description' => 'Букет из красных и белых роз',
                'quantity' => 25,
                'production_date' => '2026-05-08',
                'expiry_date' => '2026-05-18',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Нежность"',
                'price' => 520.00,
                'description' => 'Нежный букет из розовых роз',
                'quantity' => 30,
                'production_date' => '2026-05-09',
                'expiry_date' => '2026-05-19',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Солнечный"',
                'price' => 480.00,
                'description' => 'Яркий букет из желтых тюльпанов',
                'quantity' => 35,
                'production_date' => '2026-05-10',
                'expiry_date' => '2026-05-17',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Лавандовый рай"',
                'price' => 620.00,
                'description' => 'Ароматный букет с лавандой',
                'quantity' => 20,
                'production_date' => '2026-05-11',
                'expiry_date' => '2026-05-21',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Цветочная симфония"',
                'price' => 890.00,
                'description' => 'Микс из разных цветов',
                'quantity' => 15,
                'production_date' => '2026-05-12',
                'expiry_date' => '2026-05-22',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Полевой"',
                'price' => 420.00,
                'description' => 'Букет из полевых цветов',
                'quantity' => 40,
                'production_date' => '2026-05-13',
                'expiry_date' => '2026-05-20',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Белоснежка"',
                'price' => 720.00,
                'description' => 'Букет из белых цветов',
                'quantity' => 18,
                'production_date' => '2026-05-14',
                'expiry_date' => '2026-05-24',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Королевский"',
                'price' => 1800.00,
                'description' => 'Роскошный королевский букет',
                'quantity' => 8,
                'production_date' => '2026-05-15',
                'expiry_date' => '2026-05-25',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Весеннее настроение"',
                'price' => 580.00,
                'description' => 'Яркий весенний букет',
                'quantity' => 25,
                'production_date' => '2026-05-16',
                'expiry_date' => '2026-05-23',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Романтика"',
                'price' => 750.00,
                'description' => 'Романтический букет из роз',
                'quantity' => 20,
                'production_date' => '2026-05-17',
                'expiry_date' => '2026-05-27',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "С днем рождения"',
                'price' => 650.00,
                'description' => 'Праздничный букет',
                'quantity' => 30,
                'production_date' => '2026-05-18',
                'expiry_date' => '2026-05-26',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Любимой маме"',
                'price' => 500.00,
                'description' => 'Теплый букет для мамы',
                'quantity' => 35,
                'production_date' => '2026-05-19',
                'expiry_date' => '2026-05-28',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет "Вальс цветов"',
                'price' => 820.00,
                'description' => 'Элегантный букет',
                'quantity' => 22,
                'production_date' => '2026-05-20',
                'expiry_date' => '2026-05-30',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
