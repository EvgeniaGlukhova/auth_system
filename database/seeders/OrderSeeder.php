<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            // Заказ №1 (доставка, новый статус)
            [
                'type' => 'order',
                'client_id' => 1,
                'client_name' => null,
                'client_phone' => '+7 (999) 123-45-67',
                'delivery_date' => '2026-04-03',
                'delivery_time' => '14:00:00',
                'assembly_date' => '2026-04-02',
                'status' => 'completed',
                'total_amount' => 2250.00,
                'payment_method' => 'card',
                'comment' => 'Поздравительная открытка',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Заказ №2 (продажа в магазине)
            [
                'type' => 'sale',
                'client_id' => null,
                'client_name' => 'Смирнова Елена',
                'client_phone' => '+7 (999) 987-65-43',
                'delivery_date' => null,
                'delivery_time' => null,
                'assembly_date' => null,
                'status' => 'completed',
                'total_amount' => 960.00,
                'payment_method' => 'cash',
                'comment' => 'Букет на день рождения',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Заказ №3 (доставка, выполнен)
            [
                'type' => 'order',
                'client_id' => 2,
                'client_name' => null,
                'client_phone' => '+7 (999) 456-78-90',
                'delivery_date' => '2026-04-10',
                'delivery_time' => '12:00:00',
                'assembly_date' => '2026-04-09',
                'status' => 'completed',
                'total_amount' => 1850.00,
                'payment_method' => 'card',
                'comment' => 'Свадебный букет',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Заказ №4 (продажа)
            [
                'type' => 'sale',
                'client_id' => 3,
                'client_name' => null,
                'client_phone' => '+7 (999) 111-22-33',
                'delivery_date' => null,
                'delivery_time' => null,
                'assembly_date' => null,
                'status' => 'completed',
                'total_amount' => 1300.00,
                'payment_method' => 'card',
                'comment' => 'Корпоративный заказ',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Заказ №5 (доставка, отменён)
            [
                'type' => 'order',
                'client_id' => 1,
                'client_name' => null,
                'client_phone' => '+7 (999) 123-45-67',
                'delivery_date' => '2026-04-20',
                'delivery_time' => '16:00:00',
                'assembly_date' => '2026-04-19',
                'status' => 'cancelled',
                'total_amount' => 2800.00,
                'payment_method' => null,
                'comment' => 'Клиент отменил заказ',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Заказ №6 (доставка, готов к выдаче)
            [
                'type' => 'order',
                'client_id' => 4,
                'client_name' => null,
                'client_phone' => '+7 (999) 555-66-77',
                'delivery_date' => '2026-04-25',
                'delivery_time' => '11:00:00',
                'assembly_date' => '2026-04-24',
                'status' => 'ready',
                'total_amount' => 3200.00,
                'payment_method' => 'card',
                'comment' => 'Юбилей',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Заказ №7 (продажа, завершена)
            [
                'type' => 'sale',
                'client_id' => 5,
                'client_name' => null,
                'client_phone' => '+7 (999) 777-88-99',
                'delivery_date' => null,
                'delivery_time' => null,
                'assembly_date' => null,
                'status' => 'completed',
                'total_amount' => 540.00,
                'payment_method' => 'cash',
                'comment' => null,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
