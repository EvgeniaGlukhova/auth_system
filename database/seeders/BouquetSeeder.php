<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BouquetSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bouquets')->insert([
            [
                'name' => 'Весенний букет',
                'price' => 450,
                'description' => 'Нежный весенний букет из тюльпанов',
                'quantity' => 25,
                'production_date' => '2026-04-01',
                'expiry_date' => '2026-04-10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Романтический букет',
                'price' => 850,
                'description' => 'Букет из красных роз',
                'quantity' => 15,
                'production_date' => '2026-04-02',
                'expiry_date' => '2026-04-12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Свадебный букет',
                'price' => 1200,
                'description' => 'Роскошный свадебный букет',
                'quantity' => 8,
                'production_date' => '2026-04-05',
                'expiry_date' => '2026-04-15',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Букет невесты',
                'price' => 1500,
                'description' => 'Элегантный букет для невесты',
                'quantity' => 5,
                'production_date' => '2026-04-10',
                'expiry_date' => '2026-04-20',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Осенний букет',
                'price' => 550,
                'description' => 'Яркий осенний букет',
                'quantity' => 12,
                'production_date' => '2026-04-12',
                'expiry_date' => '2026-04-22',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
