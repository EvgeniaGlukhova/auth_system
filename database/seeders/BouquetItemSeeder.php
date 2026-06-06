<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BouquetItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bouquet_items')->insert([
            // Весенний букет (id=1)
            ['bouquet_id' => 1, 'flower_id' => 4, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 1, 'flower_id' => 5, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 1, 'flower_id' => 6, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Романтический букет (id=2)
            ['bouquet_id' => 2, 'flower_id' => 1, 'quantity' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 2, 'flower_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Свадебный букет (id=3)
            ['bouquet_id' => 3, 'flower_id' => 1, 'quantity' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 3, 'flower_id' => 2, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Букет невесты (id=4)
            ['bouquet_id' => 4, 'flower_id' => 7, 'quantity' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 4, 'flower_id' => 8, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 4, 'flower_id' => 9, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Осенний букет (id=5)
            ['bouquet_id' => 5, 'flower_id' => 10, 'quantity' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 5, 'flower_id' => 11, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Букет из пионов (id=6)
            ['bouquet_id' => 6, 'flower_id' => 14, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 6, 'flower_id' => 15, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Букет из лилий (id=7)
            ['bouquet_id' => 7, 'flower_id' => 7, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 7, 'flower_id' => 8, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Алые паруса (id=8)
            ['bouquet_id' => 8, 'flower_id' => 1, 'quantity' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 8, 'flower_id' => 2, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Нежность (id=9)
            ['bouquet_id' => 9, 'flower_id' => 3, 'quantity' => 7, 'created_at' => now(), 'updated_at' => now()],

            // Солнечный букет (id=10)
            ['bouquet_id' => 10, 'flower_id' => 4, 'quantity' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 10, 'flower_id' => 5, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Лавандовый рай (id=11)
            ['bouquet_id' => 11, 'flower_id' => 18, 'quantity' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 11, 'flower_id' => 7, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Цветочная симфония (id=12)
            ['bouquet_id' => 12, 'flower_id' => 1, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 12, 'flower_id' => 4, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 12, 'flower_id' => 7, 'quantity' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Полевой букет (id=13)
            ['bouquet_id' => 13, 'flower_id' => 19, 'quantity' => 12, 'created_at' => now(), 'updated_at' => now()],

            // Белоснежка (id=14)
            ['bouquet_id' => 14, 'flower_id' => 2, 'quantity' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 14, 'flower_id' => 7, 'quantity' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Королевский (id=15)
            ['bouquet_id' => 15, 'flower_id' => 1, 'quantity' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 15, 'flower_id' => 2, 'quantity' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['bouquet_id' => 15, 'flower_id' => 3, 'quantity' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
