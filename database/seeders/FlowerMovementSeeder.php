<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerMovementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('flower_movements')->insert([
            // ПРИХОДЫ (incoming) - поставки
            [
                'flower_id' => 1,
                'type' => 'incoming',
                'quantity' => 120,
                'quantity_before' => 0,
                'quantity_after' => 120,
                'reason' => 'Поставка от ООО "Цветочный рай"',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 4,
                'type' => 'incoming',
                'quantity' => 250,
                'quantity_before' => 0,
                'quantity_after' => 250,
                'reason' => 'Поставка тюльпанов',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 7,
                'type' => 'incoming',
                'quantity' => 80,
                'quantity_before' => 0,
                'quantity_after' => 80,
                'reason' => 'Поставка лилий',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 14,
                'type' => 'incoming',
                'quantity' => 60,
                'quantity_before' => 0,
                'quantity_after' => 60,
                'reason' => 'Поставка пионов',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 18,
                'type' => 'incoming',
                'quantity' => 300,
                'quantity_before' => 0,
                'quantity_after' => 300,
                'reason' => 'Поставка лаванды',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // РАСХОДЫ (outgoing) - продажи
            [
                'flower_id' => 1,
                'type' => 'outgoing',
                'quantity' => 15,
                'quantity_before' => 120,
                'quantity_after' => 105,
                'reason' => 'Продажа в заказе #1',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 4,
                'type' => 'outgoing',
                'quantity' => 50,
                'quantity_before' => 250,
                'quantity_after' => 200,
                'reason' => 'Продажа в заказе #3',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 7,
                'type' => 'outgoing',
                'quantity' => 20,
                'quantity_before' => 80,
                'quantity_after' => 60,
                'reason' => 'Продажа в заказе #7',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 2,
                'type' => 'outgoing',
                'quantity' => 25,
                'quantity_before' => 100,
                'quantity_after' => 75,
                'reason' => 'Продажа в заказе #9',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 14,
                'type' => 'outgoing',
                'quantity' => 10,
                'quantity_before' => 60,
                'quantity_after' => 50,
                'reason' => 'Продажа в заказе #12',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 18,
                'type' => 'outgoing',
                'quantity' => 40,
                'quantity_before' => 300,
                'quantity_after' => 260,
                'reason' => 'Продажа в заказе #15',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 3,
                'type' => 'outgoing',
                'quantity' => 12,
                'quantity_before' => 110,
                'quantity_after' => 98,
                'reason' => 'Продажа в заказе #18',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // ПОТЕРИ (loss) - списание порчи
            [
                'flower_id' => 4,
                'type' => 'loss',
                'quantity' => 10,
                'quantity_before' => 200,
                'quantity_after' => 190,
                'reason' => 'Истек срок годности',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 5,
                'type' => 'loss',
                'quantity' => 8,
                'quantity_before' => 220,
                'quantity_after' => 212,
                'reason' => 'Истек срок годности',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 10,
                'type' => 'loss',
                'quantity' => 15,
                'quantity_before' => 150,
                'quantity_after' => 135,
                'reason' => 'Повреждение при транспортировке',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 12,
                'type' => 'loss',
                'quantity' => 5,
                'quantity_before' => 200,
                'quantity_after' => 195,
                'reason' => 'Испортились',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // ДОПОЛНИТЕЛЬНЫЕ ПОСТАВКИ (incoming)
            [
                'flower_id' => 1,
                'type' => 'incoming',
                'quantity' => 50,
                'quantity_before' => 105,
                'quantity_after' => 155,
                'reason' => 'Дополнительная поставка роз',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 7,
                'type' => 'incoming',
                'quantity' => 30,
                'quantity_before' => 60,
                'quantity_after' => 90,
                'reason' => 'Дополнительная поставка лилий',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 19,
                'type' => 'incoming',
                'quantity' => 200,
                'quantity_before' => 400,
                'quantity_after' => 600,
                'reason' => 'Свежая ромашка',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 4,
                'type' => 'outgoing',
                'quantity' => 30,
                'quantity_before' => 190,
                'quantity_after' => 160,
                'reason' => 'Продажа в заказе #20',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
