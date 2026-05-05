<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'surname' => 'Иванов',
                'name' => 'Иван',
                'patronymic' => 'Иванович',
                'email' => 'ivan.ivanov@example.com',
                'phone' => '+7 (999) 123-45-67',
                'address' => 'г. Москва, ул. Цветочная, д. 10',
                'birth_date' => '1990-05-15',
                'comments' => 'Постоянный клиент',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'surname' => 'Петрова',
                'name' => 'Мария',
                'patronymic' => 'Петровна',
                'email' => 'maria.petrova@example.com',
                'phone' => '+7 (999) 987-65-43',
                'address' => 'г. Москва, ул. Луговая, д. 5',
                'birth_date' => '1985-08-22',
                'comments' => 'Постоянный клиент',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'surname' => 'Сидоров',
                'name' => 'Алексей',
                'patronymic' => 'Сергеевич',
                'email' => 'alexey.sidorov@example.com',
                'phone' => '+7 (999) 456-78-90',
                'address' => 'г. Москва, ул. Парковая, д. 15',
                'birth_date' => '1995-12-10',
                'comments' => 'Новый клиент',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'surname' => 'Козлова',
                'name' => 'Елена',
                'patronymic' => 'Владимировна',
                'email' => 'elena.kozlov@example.com',
                'phone' => '+7 (999) 111-22-33',
                'address' => 'г. Москва, ул. Садовая, д. 20',
                'birth_date' => '1988-03-20',
                'comments' => 'Первый заказ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'surname' => 'Морозов',
                'name' => 'Дмитрий',
                'patronymic' => 'Андреевич',
                'email' => 'dmitry@example.com',
                'phone' => '+7 (999) 222-33-44',
                'address' => 'г. Москва, ул. Лесная, д. 8',
                'birth_date' => '1992-07-12',
                'comments' => 'Заказывает на праздники',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
