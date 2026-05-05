<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders_items')->insert([
            // Заказ №1 (order_id = 1)
            [
                'order_id' => 1,
                'itemable_id' => 1, // Роза
                'itemable_type' => 'App\Models\Flower',
                'quantity' => 10,
                'price' => 150.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 1,
                'itemable_id' => 1, // Весенний букет
                'itemable_type' => 'App\Models\Bouquet',
                'quantity' => 2,
                'price' => 450.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Заказ №2 (order_id = 2)
            [
                'order_id' => 2,
                'itemable_id' => 2, // Романтический букет
                'itemable_type' => 'App\Models\Bouquet',
                'quantity' => 1,
                'price' => 850.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 2,
                'itemable_id' => 3, // Тюльпаны
                'itemable_type' => 'App\Models\Flower',
                'quantity' => 2,
                'price' => 80.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Заказ №3 (order_id = 3)
            [
                'order_id' => 3,
                'itemable_id' => 3, // Свадебный букет
                'itemable_type' => 'App\Models\Bouquet',
                'quantity' => 1,
                'price' => 1200.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 3,
                'itemable_id' => 5, // Лилия белая
                'itemable_type' => 'App\Models\Flower',
                'quantity' => 5,
                'price' => 200.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Заказ №4 (order_id = 4)
            [
                'order_id' => 4,
                'itemable_id' => 2, // Романтический букет
                'itemable_type' => 'App\Models\Bouquet',
                'quantity' => 1,
                'price' => 850.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 4,
                'itemable_id' => 1, // Хризантема
                'itemable_type' => 'App\Models\Flower',
                'quantity' => 3,
                'price' => 100.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Заказ №5 (order_id = 5) - отменён
            [
                'order_id' => 5,
                'itemable_id' => 4, // Букет невесты
                'itemable_type' => 'App\Models\Bouquet',
                'quantity' => 1,
                'price' => 1500.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 5,
                'itemable_id' => 6, // Лилия розовая
                'itemable_type' => 'App\Models\Flower',
                'quantity' => 10,
                'price' => 220.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Заказ №6 (order_id = 6)
            [
                'order_id' => 6,
                'itemable_id' => 4, // Букет невесты
                'itemable_type' => 'App\Models\Bouquet',
                'quantity' => 2,
                'price' => 1500.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 6,
                'itemable_id' => 1, // Гвоздика
                'itemable_type' => 'App\Models\Flower',
                'quantity' => 2,
                'price' => 90.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Заказ №7 (order_id = 7)
            [
                'order_id' => 7,
                'itemable_id' => 2, // Весенний букет
                'itemable_type' => 'App\Models\Bouquet',
                'quantity' => 1,
                'price' => 450.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 7,
                'itemable_id' => 5, // Гвоздика
                'itemable_type' => 'App\Models\Flower',
                'quantity' => 1,
                'price' => 90.00,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
