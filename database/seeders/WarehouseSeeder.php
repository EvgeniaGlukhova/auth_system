<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('warehouses')->insert([
            [
                'flower_id' => 1, // Роза красная
                'quantity' => 100,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 2, // Роза белая
                'quantity' => 80,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 3, // Тюльпан красный
                'quantity' => 200,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 4, // Тюльпан желтый
                'quantity' => 150,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 5, // Лилия белая
                'quantity' => 60,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 6, // Лилия розовая
                'quantity' => 40,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 7, // Хризантема
                'quantity' => 120,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 8, // Гвоздика
                'quantity' => 180,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
