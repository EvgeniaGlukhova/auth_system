<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BouquetItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bouquet_items')->insert([
            // Букет №1 (Весенний букет) - id = 1
            [
                'bouquet_id' => 1,
                'flower_id' => 3, // Тюльпан красный
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 1,
                'flower_id' => 4, // Тюльпан желтый
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 1,
                'flower_id' => 7, // Хризантема
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Букет №2 (Романтический букет) - id = 2
            [
                'bouquet_id' => 2,
                'flower_id' => 1, // Роза красная
                'quantity' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 2,
                'flower_id' => 2, // Роза белая
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 2,
                'flower_id' => 8, // Гвоздика
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Букет №3 (Свадебный букет) - id = 3
            [
                'bouquet_id' => 3,
                'flower_id' => 5, // Лилия белая
                'quantity' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 3,
                'flower_id' => 2, // Роза белая
                'quantity' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Букет №4 (Букет невесты) - id = 4
            [
                'bouquet_id' => 4,
                'flower_id' => 5, // Лилия белая
                'quantity' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 4,
                'flower_id' => 1, // Роза красная
                'quantity' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 4,
                'flower_id' => 6, // Лилия розовая
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Букет №5 (Осенний букет) - id = 5
            [
                'bouquet_id' => 5,
                'flower_id' => 7, // Хризантема
                'quantity' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 5,
                'flower_id' => 8, // Гвоздика
                'quantity' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'bouquet_id' => 5,
                'flower_id' => 3, // Тюльпан красный
                'quantity' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
