<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FlowerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('flowers')->insert([
            [
                'name' => 'Роза красная',
                'price' => 150,
                'quantity' => 100,
                'supplier_id' => 1,
                'received_date' => '2026-04-01',
                'expiry_date' => '2026-04-15',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Роза белая',
                'price' => 160,
                'quantity' => 80,
                'supplier_id' => 1,
                'received_date' => '2026-04-02',
                'expiry_date' => '2026-04-16',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Тюльпан красный',
                'price' => 80,
                'quantity' => 200,
                'supplier_id' => 1,
                'received_date' => '2026-04-01',
                'expiry_date' => '2026-04-10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Тюльпан желтый',
                'price' => 85,
                'quantity' => 150,
                'supplier_id' => 1,
                'received_date' => '2026-04-03',
                'expiry_date' => '2026-04-12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лилия белая',
                'price' => 200,
                'quantity' => 60,
                'supplier_id' => 2,
                'received_date' => '2026-04-05',
                'expiry_date' => '2026-04-20',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лилия розовая',
                'price' => 220,
                'quantity' => 40,
                'supplier_id' => 2,
                'received_date' => '2026-04-10',
                'expiry_date' => '2026-04-25',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Хризантема',
                'price' => 100,
                'quantity' => 120,
                'supplier_id' => 1,
                'received_date' => '2026-04-08',
                'expiry_date' => '2026-04-22',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Гвоздика',
                'price' => 90,
                'quantity' => 180,
                'supplier_id' => 2,
                'received_date' => '2026-04-04',
                'expiry_date' => '2026-04-18',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
