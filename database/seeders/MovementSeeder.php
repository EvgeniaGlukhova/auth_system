<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('movements')->insert([
            // ========== ПРИХОДЫ ЦВЕТОВ (incoming) ==========
            [
                'movable_id' => 1,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 4,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 7,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 14,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 18,
                'movable_type' => 'App\Models\Flower',
                'type' => 'incoming',
                'quantity' => 300,
                'quantity_before' => 0,
                'quantity_after' => 300,
                'reason' => 'Поставка лаванды',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // ========== РАСХОДЫ ЦВЕТОВ (outgoing) ==========
            [
                'movable_id' => 1,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 4,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 7,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 2,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 14,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 18,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 3,
                'movable_type' => 'App\Models\Flower',
                'type' => 'outgoing',
                'quantity' => 12,
                'quantity_before' => 110,
                'quantity_after' => 98,
                'reason' => 'Продажа в заказе #18',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // ========== ПОТЕРИ ЦВЕТОВ (loss) ==========
            [
                'movable_id' => 4,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 5,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 10,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 12,
                'movable_type' => 'App\Models\Flower',
                'type' => 'loss',
                'quantity' => 5,
                'quantity_before' => 200,
                'quantity_after' => 195,
                'reason' => 'Испортились',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // ========== ДОПОЛНИТЕЛЬНЫЕ ПОСТАВКИ (incoming) ==========
            [
                'movable_id' => 1,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 7,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 19,
                'movable_type' => 'App\Models\Flower',
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
                'movable_id' => 4,
                'movable_type' => 'App\Models\Flower',
                'type' => 'outgoing',
                'quantity' => 30,
                'quantity_before' => 190,
                'quantity_after' => 160,
                'reason' => 'Продажа в заказе #20',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // ========== ПРИХОДЫ БУКЕТОВ (incoming) ==========
            [
                'movable_id' => 1,
                'movable_type' => 'App\Models\Bouquet',
                'type' => 'incoming',
                'quantity' => 15,
                'quantity_before' => 0,
                'quantity_after' => 15,
                'reason' => 'Сборка весенних букетов',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'movable_id' => 2,
                'movable_type' => 'App\Models\Bouquet',
                'type' => 'incoming',
                'quantity' => 10,
                'quantity_before' => 0,
                'quantity_after' => 10,
                'reason' => 'Сборка романтических букетов',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // ========== ПРИХОДЫ МАТЕРИАЛОВ (incoming) ==========
            [
                'movable_id' => 1,
                'movable_type' => 'App\Models\Material',
                'type' => 'incoming',
                'quantity' => 100,
                'quantity_before' => 0,
                'quantity_after' => 100,
                'reason' => 'Поставка атласных лент',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'movable_id' => 5,
                'movable_type' => 'App\Models\Material',
                'type' => 'incoming',
                'quantity' => 200,
                'quantity_before' => 0,
                'quantity_after' => 200,
                'reason' => 'Поставка прозрачной плёнки',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
