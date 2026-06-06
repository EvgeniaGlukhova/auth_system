<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('materials')->insert([
            // Ленты
            [
                'name' => 'Лента атласная красная',
                'type' => 'ribbon',
                'price' => 50.00,
                'quantity' => 100,
                'supplier_id' => 1,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лента атласная белая',
                'type' => 'ribbon',
                'price' => 50.00,
                'quantity' => 80,
                'supplier_id' => 1,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лента кружевная',
                'type' => 'ribbon',
                'price' => 75.00,
                'quantity' => 50,
                'supplier_id' => 2,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Лента джутовая',
                'type' => 'ribbon',
                'price' => 40.00,
                'quantity' => 120,
                'supplier_id' => 1,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Упаковка
            [
                'name' => 'Плёнка прозрачная',
                'type' => 'packaging',
                'price' => 30.00,
                'quantity' => 200,
                'supplier_id' => 1,
                'expiry_date' => '2027-01-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Плёнка крафт',
                'type' => 'packaging',
                'price' => 45.00,
                'quantity' => 150,
                'supplier_id' => 2,
                'expiry_date' => '2027-01-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Сетка флористическая',
                'type' => 'packaging',
                'price' => 60.00,
                'quantity' => 80,
                'supplier_id' => 1,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Фетр',
                'type' => 'packaging',
                'price' => 55.00,
                'quantity' => 60,
                'supplier_id' => 3,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Коробки
            [
                'name' => 'Коробка маленькая',
                'type' => 'box',
                'price' => 80.00,
                'quantity' => 50,
                'supplier_id' => 2,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Коробка средняя',
                'type' => 'box',
                'price' => 120.00,
                'quantity' => 40,
                'supplier_id' => 2,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Коробка большая',
                'type' => 'box',
                'price' => 180.00,
                'quantity' => 30,
                'supplier_id' => 2,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Коробка-сердце',
                'type' => 'box',
                'price' => 150.00,
                'quantity' => 25,
                'supplier_id' => 1,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Дополнительные материалы
            [
                'name' => 'Пищевая плёнка (для букетов)',
                'type' => 'packaging',
                'price' => 25.00,
                'quantity' => 300,
                'supplier_id' => 3,
                'expiry_date' => '2027-06-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Шпажки деревянные',
                'type' => 'other',
                'price' => 15.00,
                'quantity' => 500,
                'supplier_id' => 1,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Проволока флористическая',
                'type' => 'other',
                'price' => 35.00,
                'quantity' => 200,
                'supplier_id' => 2,
                'expiry_date' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
