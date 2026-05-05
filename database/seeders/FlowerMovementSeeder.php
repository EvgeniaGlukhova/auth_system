<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerMovementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('flower_movements')->insert([
            // Приходы цветов (incoming)
            [
                'flower_id' => 1, // Роза красная
                'type' => 'incoming',
                'quantity' => 100,
                'quantity_before' => 0,
                'quantity_after' => 100,
                'reason' => 'Поставка от ООО "Цветочный рай"',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 3, // Тюльпан красный
                'type' => 'incoming',
                'quantity' => 200,
                'quantity_before' => 0,
                'quantity_after' => 200,
                'reason' => 'Поставка от ООО "Цветочный рай"',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 5, // Лилия белая
                'type' => 'incoming',
                'quantity' => 60,
                'quantity_before' => 0,
                'quantity_after' => 60,
                'reason' => 'Поставка от ИП "Зеленый мир"',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 1, // Роза красная
                'type' => 'incoming',
                'quantity' => 50,
                'quantity_before' => 70,
                'quantity_after' => 120,
                'reason' => 'Дополнительная поставка',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Расходы цветов (outgoing)
            [
                'flower_id' => 1, // Роза красная
                'type' => 'outgoing',
                'quantity' => 10,
                'quantity_before' => 100,
                'quantity_after' => 90,
                'reason' => 'Продажа в заказе #1',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 3, // Тюльпан красный
                'type' => 'outgoing',
                'quantity' => 50,
                'quantity_before' => 200,
                'quantity_after' => 150,
                'reason' => 'Продажа в заказе #2',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 2, // Роза белая
                'type' => 'outgoing',
                'quantity' => 20,
                'quantity_before' => 80,
                'quantity_after' => 60,
                'reason' => 'Продажа в заказе #3',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 8, // Гвоздика
                'type' => 'outgoing',
                'quantity' => 10,
                'quantity_before' => 180,
                'quantity_after' => 170,
                'reason' => 'Продажа в заказе #4',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Потери цветов (loss)
            [
                'flower_id' => 3, // Тюльпан красный
                'type' => 'loss',
                'quantity' => 20,
                'quantity_before' => 150,
                'quantity_after' => 130,
                'reason' => 'Истек срок годности',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 1, // Роза красная
                'type' => 'loss',
                'quantity' => 5,
                'quantity_before' => 120,
                'quantity_after' => 115,
                'reason' => 'Повреждение при транспортировке',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'flower_id' => 7, // Хризантема
                'type' => 'loss',
                'quantity' => 10,
                'quantity_before' => 120,
                'quantity_after' => 110,
                'reason' => 'Истек срок годности',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
