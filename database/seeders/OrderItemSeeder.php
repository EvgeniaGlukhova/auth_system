<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        // Очищаем таблицу перед вставкой
        DB::table('orders_items')->truncate();

        DB::table('orders_items')->insert([
            // ========== АПРЕЛЬ 2026 (заказы 1-6) ==========

            // Заказ 1 (Апрель, completed)
            ['order_id' => 1, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 450, 'created_at' => '2026-04-01 10:00:00', 'updated_at' => '2026-04-01 10:00:00'],
            ['order_id' => 1, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Flower', 'quantity' => 10, 'price' => 150, 'created_at' => '2026-04-01 10:00:00', 'updated_at' => '2026-04-01 10:00:00'],

            // Заказ 2 (Апрель, completed)
            ['order_id' => 2, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 850, 'created_at' => '2026-04-05 15:30:00', 'updated_at' => '2026-04-05 15:30:00'],
            ['order_id' => 2, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Flower', 'quantity' => 15, 'price' => 80, 'created_at' => '2026-04-05 15:30:00', 'updated_at' => '2026-04-05 15:30:00'],

            // Заказ 3 (Апрель, completed)
            ['order_id' => 3, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 1200, 'created_at' => '2026-04-08 09:00:00', 'updated_at' => '2026-04-08 09:00:00'],
            ['order_id' => 3, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Flower', 'quantity' => 10, 'price' => 200, 'created_at' => '2026-04-08 09:00:00', 'updated_at' => '2026-04-08 09:00:00'],

            // Заказ 4 (Апрель, completed)
            ['order_id' => 4, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 2, 'price' => 850, 'created_at' => '2026-04-12 14:00:00', 'updated_at' => '2026-04-12 14:00:00'],
            ['order_id' => 4, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Flower', 'quantity' => 5, 'price' => 80, 'created_at' => '2026-04-12 14:00:00', 'updated_at' => '2026-04-12 14:00:00'],

            // Заказ 5 (Апрель, completed)
            ['order_id' => 5, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 1500, 'created_at' => '2026-04-13 11:00:00', 'updated_at' => '2026-04-13 11:00:00'],
            ['order_id' => 5, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Flower', 'quantity' => 20, 'price' => 85, 'created_at' => '2026-04-13 11:00:00', 'updated_at' => '2026-04-13 11:00:00'],

            // Заказ 6 (Апрель, completed)
            ['order_id' => 6, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 2, 'price' => 450, 'created_at' => '2026-04-18 18:00:00', 'updated_at' => '2026-04-18 18:00:00'],
            ['order_id' => 6, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'quantity' => 8, 'price' => 160, 'created_at' => '2026-04-18 18:00:00', 'updated_at' => '2026-04-18 18:00:00'],

            // ========== МАЙ 2026 (заказы 7-26) ==========

            // Заказ 7 (Май, completed)
            ['order_id' => 7, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 550, 'created_at' => '2026-05-01 10:00:00', 'updated_at' => '2026-05-01 10:00:00'],
            ['order_id' => 7, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'quantity' => 15, 'price' => 160, 'created_at' => '2026-05-01 10:00:00', 'updated_at' => '2026-05-01 10:00:00'],

            // Заказ 8 (Май, completed)
            ['order_id' => 8, 'itemable_id' => 6, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 950, 'created_at' => '2026-05-05 15:30:00', 'updated_at' => '2026-05-05 15:30:00'],
            ['order_id' => 8, 'itemable_id' => 6, 'itemable_type' => 'App\Models\Flower', 'quantity' => 5, 'price' => 220, 'created_at' => '2026-05-05 15:30:00', 'updated_at' => '2026-05-05 15:30:00'],

            // Заказ 9 (Май, assembly)
            ['order_id' => 9, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 780, 'created_at' => '2026-05-04 09:00:00', 'updated_at' => '2026-05-04 09:00:00'],
            ['order_id' => 9, 'itemable_id' => 6, 'itemable_type' => 'App\Models\Flower', 'quantity' => 20, 'price' => 220, 'created_at' => '2026-05-04 09:00:00', 'updated_at' => '2026-05-04 09:00:00'],

            // Заказ 10 (Май, completed)
            ['order_id' => 10, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 2, 'price' => 850, 'created_at' => '2026-05-06 14:00:00', 'updated_at' => '2026-05-06 14:00:00'],
            ['order_id' => 10, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Flower', 'quantity' => 10, 'price' => 155, 'created_at' => '2026-05-06 14:00:00', 'updated_at' => '2026-05-06 14:00:00'],

            // Заказ 11 (Май, ready)
            ['order_id' => 11, 'itemable_id' => 8, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 680, 'created_at' => '2026-05-08 11:00:00', 'updated_at' => '2026-05-08 11:00:00'],
            ['order_id' => 11, 'itemable_id' => 8, 'itemable_type' => 'App\Models\Flower', 'quantity' => 30, 'price' => 90, 'created_at' => '2026-05-08 11:00:00', 'updated_at' => '2026-05-08 11:00:00'],

            // Заказ 12 (Май, new)
            ['order_id' => 12, 'itemable_id' => 9, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 520, 'created_at' => '2026-05-10 18:00:00', 'updated_at' => '2026-05-10 18:00:00'],
            ['order_id' => 12, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Flower', 'quantity' => 25, 'price' => 155, 'created_at' => '2026-05-10 18:00:00', 'updated_at' => '2026-05-10 18:00:00'],

            // Заказ 13 (Май, completed)
            ['order_id' => 13, 'itemable_id' => 10, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 480, 'created_at' => '2026-05-12 16:00:00', 'updated_at' => '2026-05-12 16:00:00'],
            ['order_id' => 13, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Flower', 'quantity' => 12, 'price' => 150, 'created_at' => '2026-05-12 16:00:00', 'updated_at' => '2026-05-12 16:00:00'],

            // Заказ 14 (Май, completed)
            ['order_id' => 14, 'itemable_id' => 11, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 620, 'created_at' => '2026-05-14 11:00:00', 'updated_at' => '2026-05-14 11:00:00'],
            ['order_id' => 14, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Flower', 'quantity' => 15, 'price' => 80, 'created_at' => '2026-05-14 11:00:00', 'updated_at' => '2026-05-14 11:00:00'],

            // Заказ 15 (Май, completed)
            ['order_id' => 15, 'itemable_id' => 12, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 890, 'created_at' => '2026-05-15 09:00:00', 'updated_at' => '2026-05-15 09:00:00'],
            ['order_id' => 15, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Flower', 'quantity' => 20, 'price' => 85, 'created_at' => '2026-05-15 09:00:00', 'updated_at' => '2026-05-15 09:00:00'],

            // Заказ 16 (Май, completed)
            ['order_id' => 16, 'itemable_id' => 13, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 420, 'created_at' => '2026-05-16 14:00:00', 'updated_at' => '2026-05-16 14:00:00'],
            ['order_id' => 16, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Flower', 'quantity' => 8, 'price' => 200, 'created_at' => '2026-05-16 14:00:00', 'updated_at' => '2026-05-16 14:00:00'],

            // Заказ 17 (Май, completed)
            ['order_id' => 17, 'itemable_id' => 14, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 720, 'created_at' => '2026-05-17 12:00:00', 'updated_at' => '2026-05-17 12:00:00'],
            ['order_id' => 17, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'quantity' => 10, 'price' => 160, 'created_at' => '2026-05-17 12:00:00', 'updated_at' => '2026-05-17 12:00:00'],

            // Заказ 18 (Май, completed)
            ['order_id' => 18, 'itemable_id' => 15, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 1800, 'created_at' => '2026-05-18 15:00:00', 'updated_at' => '2026-05-18 15:00:00'],
            ['order_id' => 18, 'itemable_id' => 6, 'itemable_type' => 'App\Models\Flower', 'quantity' => 12, 'price' => 220, 'created_at' => '2026-05-18 15:00:00', 'updated_at' => '2026-05-18 15:00:00'],

            // Заказ 19 (Май, new)
            ['order_id' => 19, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 2, 'price' => 450, 'created_at' => '2026-05-19 10:00:00', 'updated_at' => '2026-05-19 10:00:00'],
            ['order_id' => 19, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Flower', 'quantity' => 15, 'price' => 155, 'created_at' => '2026-05-19 10:00:00', 'updated_at' => '2026-05-19 10:00:00'],

            // Заказ 20 (Май, assembly)
            ['order_id' => 20, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 850, 'created_at' => '2026-05-20 17:00:00', 'updated_at' => '2026-05-20 17:00:00'],
            ['order_id' => 20, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Flower', 'quantity' => 8, 'price' => 80, 'created_at' => '2026-05-20 17:00:00', 'updated_at' => '2026-05-20 17:00:00'],

            // Заказ 21 (Май, completed)
            ['order_id' => 21, 'itemable_id' => 3, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 1200, 'created_at' => '2026-05-21 09:00:00', 'updated_at' => '2026-05-21 09:00:00'],
            ['order_id' => 21, 'itemable_id' => 8, 'itemable_type' => 'App\Models\Flower', 'quantity' => 20, 'price' => 90, 'created_at' => '2026-05-21 09:00:00', 'updated_at' => '2026-05-21 09:00:00'],

            // Заказ 22 (Май, ready)
            ['order_id' => 22, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 1500, 'created_at' => '2026-05-22 19:00:00', 'updated_at' => '2026-05-22 19:00:00'],
            ['order_id' => 22, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Flower', 'quantity' => 15, 'price' => 85, 'created_at' => '2026-05-22 19:00:00', 'updated_at' => '2026-05-22 19:00:00'],

            // Заказ 23 (Май, completed)
            ['order_id' => 23, 'itemable_id' => 5, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 2, 'price' => 550, 'created_at' => '2026-05-23 10:00:00', 'updated_at' => '2026-05-23 10:00:00'],
            ['order_id' => 23, 'itemable_id' => 1, 'itemable_type' => 'App\Models\Flower', 'quantity' => 10, 'price' => 150, 'created_at' => '2026-05-23 10:00:00', 'updated_at' => '2026-05-23 10:00:00'],

            // Заказ 24 (Май, cancelled)
            ['order_id' => 24, 'itemable_id' => 6, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 950, 'created_at' => '2026-05-24 13:00:00', 'updated_at' => '2026-05-24 13:00:00'],
            ['order_id' => 24, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Flower', 'quantity' => 10, 'price' => 200, 'created_at' => '2026-05-24 13:00:00', 'updated_at' => '2026-05-24 13:00:00'],

            // Заказ 25 (Май, new)
            ['order_id' => 25, 'itemable_id' => 7, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 780, 'created_at' => '2026-05-25 15:00:00', 'updated_at' => '2026-05-25 15:00:00'],
            ['order_id' => 25, 'itemable_id' => 2, 'itemable_type' => 'App\Models\Flower', 'quantity' => 8, 'price' => 160, 'created_at' => '2026-05-25 15:00:00', 'updated_at' => '2026-05-25 15:00:00'],

            // Заказ 26 (Май, completed)
            ['order_id' => 26, 'itemable_id' => 8, 'itemable_type' => 'App\Models\Bouquet', 'quantity' => 1, 'price' => 680, 'created_at' => '2026-05-26 11:00:00', 'updated_at' => '2026-05-26 11:00:00'],
            ['order_id' => 26, 'itemable_id' => 4, 'itemable_type' => 'App\Models\Flower', 'quantity' => 12, 'price' => 80, 'created_at' => '2026-05-26 11:00:00', 'updated_at' => '2026-05-26 11:00:00'],
        ]);
    }
}
