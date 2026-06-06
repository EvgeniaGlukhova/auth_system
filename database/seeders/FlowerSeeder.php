<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('flowers')->insert([
            [
                'name' => 'Роза красная',
                'price' => 150.00,
                'quantity' => 120,
                'supplier_id' => 1,
                'received_date' => '2026-05-01',
                'expiry_date' => '2026-05-15',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Роза белая',
                'price' => 160.00,
                'quantity' => 100,
                'supplier_id' => 1,
                'received_date' => '2026-05-02',
                'expiry_date' => '2026-05-16',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Роза розовая',
                'price' => 155.00,
                'quantity' => 110,
                'supplier_id' => 1,
                'received_date' => '2026-05-03',
                'expiry_date' => '2026-05-17',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Тюльпан красный',
                'price' => 80.00,
                'quantity' => 250,
                'supplier_id' => 1,
                'received_date' => '2026-05-04',
                'expiry_date' => '2026-05-10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Тюльпан желтый',
                'price' => 85.00,
                'quantity' => 220,
                'supplier_id' => 1,
                'received_date' => '2026-05-05',
                'expiry_date' => '2026-05-11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Тюльпан белый',
                'price' => 85.00,
                'quantity' => 200,
                'supplier_id' => 1,
                'received_date' => '2026-05-06',
                'expiry_date' => '2026-05-12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лилия белая',
                'price' => 200.00,
                'quantity' => 80,
                'supplier_id' => 2,
                'received_date' => '2026-05-07',
                'expiry_date' => '2026-05-20',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лилия розовая',
                'price' => 220.00,
                'quantity' => 70,
                'supplier_id' => 2,
                'received_date' => '2026-05-08',
                'expiry_date' => '2026-05-21',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лилия оранжевая',
                'price' => 210.00,
                'quantity' => 65,
                'supplier_id' => 2,
                'received_date' => '2026-05-09',
                'expiry_date' => '2026-05-22',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Хризантема белая',
                'price' => 100.00,
                'quantity' => 150,
                'supplier_id' => 3,
                'received_date' => '2026-05-10',
                'expiry_date' => '2026-05-25',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Хризантема желтая',
                'price' => 100.00,
                'quantity' => 140,
                'supplier_id' => 3,
                'received_date' => '2026-05-11',
                'expiry_date' => '2026-05-26',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Гвоздика красная',
                'price' => 90.00,
                'quantity' => 200,
                'supplier_id' => 4,
                'received_date' => '2026-05-12',
                'expiry_date' => '2026-05-18',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Гвоздика белая',
                'price' => 90.00,
                'quantity' => 190,
                'supplier_id' => 4,
                'received_date' => '2026-05-13',
                'expiry_date' => '2026-05-19',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Пион розовый',
                'price' => 250.00,
                'quantity' => 60,
                'supplier_id' => 5,
                'received_date' => '2026-05-14',
                'expiry_date' => '2026-05-28',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Пион белый',
                'price' => 250.00,
                'quantity' => 55,
                'supplier_id' => 5,
                'received_date' => '2026-05-15',
                'expiry_date' => '2026-05-29',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ирис синий',
                'price' => 120.00,
                'quantity' => 100,
                'supplier_id' => 6,
                'received_date' => '2026-05-16',
                'expiry_date' => '2026-05-30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Гортензия голубая',
                'price' => 300.00,
                'quantity' => 40,
                'supplier_id' => 7,
                'received_date' => '2026-05-17',
                'expiry_date' => '2026-05-31',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лаванда',
                'price' => 70.00,
                'quantity' => 300,
                'supplier_id' => 8,
                'received_date' => '2026-05-18',
                'expiry_date' => '2026-05-25',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ромашка полевая',
                'price' => 60.00,
                'quantity' => 400,
                'supplier_id' => 9,
                'received_date' => '2026-05-19',
                'expiry_date' => '2026-05-26',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Астра белая',
                'price' => 110.00,
                'quantity' => 120,
                'supplier_id' => 10,
                'received_date' => '2026-05-20',
                'expiry_date' => '2026-05-30',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
