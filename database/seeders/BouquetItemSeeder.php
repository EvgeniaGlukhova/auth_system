<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BouquetItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bouquet_items')->insert([
            // ========== ВЕСЕННИЙ БУКЕТ (id=1) ==========
            // Цветы
            ['bouquet_id' => 1, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 1, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 1, 'itemable_id' => 6, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Материалы
            ['bouquet_id' => 1, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],

            // ========== РОМАНТИЧЕСКИЙ БУКЕТ (id=2) ==========
            // Цветы
            ['bouquet_id' => 2, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 2, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            // Материалы
            ['bouquet_id' => 2, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],

            // ========== СВАДЕБНЫЙ БУКЕТ (id=3) ==========
            // Цветы
            ['bouquet_id' => 3, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 3, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            // Материалы
            ['bouquet_id' => 3, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],

            // ========== БУКЕТ НЕВЕСТЫ (id=4) ==========
            // Цветы
            ['bouquet_id' => 4, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 4, 'itemable_id' => 8, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 4, 'itemable_id' => 9, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            // Материалы
            ['bouquet_id' => 4, 'itemable_id' => 12, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],

            // ========== ОСЕННИЙ БУКЕТ (id=5) ==========
            // Цветы
            ['bouquet_id' => 5, 'itemable_id' => 10, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 5, 'itemable_id' => 11, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],
            // Материалы
            ['bouquet_id' => 5, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],

            // ========== БУКЕТ ИЗ ПИОНОВ (id=6) ==========
            ['bouquet_id' => 6, 'itemable_id' => 14, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 6, 'itemable_id' => 15, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 6, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],

            // ========== БУКЕТ ИЗ ЛИЛИЙ (id=7) ==========
            ['bouquet_id' => 7, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 7, 'itemable_id' => 8, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 7, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],

            // ========== АЛЫЕ ПАРУСА (id=8) ==========
            ['bouquet_id' => 8, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 8, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 8, 'itemable_id' => 6, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],

            // ========== НЕЖНОСТЬ (id=9) ==========
            ['bouquet_id' => 9, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 9, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],

            // ========== СОЛНЕЧНЫЙ БУКЕТ (id=10) ==========
            ['bouquet_id' => 10, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 10, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],

            // ========== ЛАВАНДОВЫЙ РАЙ (id=11) ==========
            ['bouquet_id' => 11, 'itemable_id' => 18, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 11, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 11, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],

            // ========== ЦВЕТОЧНАЯ СИМФОНИЯ (id=12) ==========
            ['bouquet_id' => 12, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 12, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 12, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 12, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],

            // ========== ПОЛЕВОЙ БУКЕТ (id=13) ==========
            ['bouquet_id' => 13, 'itemable_id' => 19, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 13, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],

            // ========== БЕЛОСНЕЖКА (id=14) ==========
            ['bouquet_id' => 14, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 14, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 14, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 1, 'created_at' => now(), 'updated_at' => now()],

            // ========== КОРОЛЕВСКИЙ (id=15) ==========
            ['bouquet_id' => 15, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 15, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 15, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Flower', 'user_id' => 2, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 15, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Material', 'user_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
