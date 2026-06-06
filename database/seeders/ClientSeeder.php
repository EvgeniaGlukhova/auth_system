<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clients')->insert([
            // ==================== АПРЕЛЬ 2026 (10 КЛИЕНТОВ) ====================
            [
                'name' => 'Александр',
                'patronymic' => 'Александрович',
                'surname' => 'Волков',
                'email' => 'volkov@example.com',
                'phone' => '+7 (999) 111-11-11',
                'address' => 'г. Москва, ул. Ленина, д. 1',
                'birth_date' => '1990-04-01',
                'comments' => 'Постоянный клиент',
                'created_at' => '2026-04-01 10:00:00',
                'updated_at' => '2026-04-01 10:00:00'
            ],
            [
                'name' => 'Елена',
                'patronymic' => 'Сергеевна',
                'surname' => 'Морозова',
                'email' => 'morozova@example.com',
                'phone' => '+7 (999) 222-22-22',
                'address' => 'г. Москва, ул. Пушкина, д. 10',
                'birth_date' => '1985-04-05',
                'comments' => 'Заказывает на праздники',
                'created_at' => '2026-04-02 11:00:00',
                'updated_at' => '2026-04-02 11:00:00'
            ],
            [
                'name' => 'Дмитрий',
                'patronymic' => 'Игоревич',
                'surname' => 'Кузнецов',
                'email' => 'kuznetsov@example.com',
                'phone' => '+7 (999) 333-33-33',
                'address' => 'г. Москва, ул. Садовая, д. 5',
                'birth_date' => '1988-04-10',
                'comments' => 'Корпоративный клиент',
                'created_at' => '2026-04-03 12:00:00',
                'updated_at' => '2026-04-03 12:00:00'
            ],
            [
                'name' => 'Ольга',
                'patronymic' => 'Владимировна',
                'surname' => 'Соколова',
                'email' => 'sokolova@example.com',
                'phone' => '+7 (999) 444-44-44',
                'address' => 'г. Москва, ул. Цветочная, д. 15',
                'birth_date' => '1992-04-12',
                'comments' => 'Любит розы',
                'created_at' => '2026-04-05 14:00:00',
                'updated_at' => '2026-04-05 14:00:00'
            ],
            [
                'name' => 'Павел',
                'patronymic' => 'Андреевич',
                'surname' => 'Лебедев',
                'email' => 'lebedev@example.com',
                'phone' => '+7 (999) 555-55-55',
                'address' => 'г. Москва, ул. Парковая, д. 20',
                'birth_date' => '1995-04-15',
                'comments' => 'Новый клиент',
                'created_at' => '2026-04-07 09:00:00',
                'updated_at' => '2026-04-07 09:00:00'
            ],
            [
                'name' => 'Наталья',
                'patronymic' => 'Петровна',
                'surname' => 'Новикова',
                'email' => 'novikova@example.com',
                'phone' => '+7 (999) 666-66-66',
                'address' => 'г. Москва, ул. Лесная, д. 8',
                'birth_date' => '1980-04-18',
                'comments' => 'Постоянный клиент',
                'created_at' => '2026-04-10 15:00:00',
                'updated_at' => '2026-04-10 15:00:00'
            ],
            [
                'name' => 'Сергей',
                'patronymic' => 'Михайлович',
                'surname' => 'Зайцев',
                'email' => 'zaytsev@example.com',
                'phone' => '+7 (999) 777-77-77',
                'address' => 'г. Москва, ул. Солнечная, д. 3',
                'birth_date' => '1978-04-20',
                'comments' => 'Заказывает букеты',
                'created_at' => '2026-04-12 13:00:00',
                'updated_at' => '2026-04-12 13:00:00'
            ],
            [
                'name' => 'Татьяна',
                'patronymic' => 'Алексеевна',
                'surname' => 'Павлова',
                'email' => 'pavlova@example.com',
                'phone' => '+7 (999) 888-88-88',
                'address' => 'г. Москва, ул. Зеленая, д. 12',
                'birth_date' => '1987-04-22',
                'comments' => 'Первый заказ',
                'created_at' => '2026-04-15 11:00:00',
                'updated_at' => '2026-04-15 11:00:00'
            ],
            [
                'name' => 'Антон',
                'patronymic' => 'Денисович',
                'surname' => 'Степанов',
                'email' => 'stepanov@example.com',
                'phone' => '+7 (999) 999-99-99',
                'address' => 'г. Москва, ул. Школьная, д. 7',
                'birth_date' => '1998-04-25',
                'comments' => 'Молодой клиент',
                'created_at' => '2026-04-18 16:00:00',
                'updated_at' => '2026-04-18 16:00:00'
            ],
            [
                'name' => 'Марина',
                'patronymic' => 'Юрьевна',
                'surname' => 'Николаева',
                'email' => 'nikolaeva@example.com',
                'phone' => '+7 (999) 101-01-01',
                'address' => 'г. Москва, ул. Радужная, д. 2',
                'birth_date' => '1993-04-28',
                'comments' => 'Любит букеты',
                'created_at' => '2026-04-20 10:00:00',
                'updated_at' => '2026-04-20 10:00:00'
            ],

            // ==================== МАЙ 2026 (10 КЛИЕНТОВ) ====================
            [
                'name' => 'Ирина',
                'patronymic' => 'Васильевна',
                'surname' => 'Федорова',
                'email' => 'fedorova@example.com',
                'phone' => '+7 (999) 202-02-02',
                'address' => 'г. Москва, ул. Новая, д. 10',
                'birth_date' => '1984-05-01',
                'comments' => 'Постоянный клиент',
                'created_at' => '2026-05-02 09:00:00',
                'updated_at' => '2026-05-02 09:00:00'
            ],
            [
                'name' => 'Владимир',
                'patronymic' => 'Олегович',
                'surname' => 'Егоров',
                'email' => 'egorov@example.com',
                'phone' => '+7 (999) 303-03-03',
                'address' => 'г. Москва, ул. Молодежная, д. 15',
                'birth_date' => '1991-05-05',
                'comments' => 'Заказывает цветы',
                'created_at' => '2026-05-04 14:00:00',
                'updated_at' => '2026-05-04 14:00:00'
            ],
            [
                'name' => 'Светлана',
                'patronymic' => 'Борисовна',
                'surname' => 'Тихонова',
                'email' => 'tihonova@example.com',
                'phone' => '+7 (999) 404-04-04',
                'address' => 'г. Москва, ул. Строителей, д. 20',
                'birth_date' => '1975-05-10',
                'comments' => 'Важный клиент',
                'created_at' => '2026-05-06 11:00:00',
                'updated_at' => '2026-05-06 11:00:00'
            ],
            [
                'name' => 'Константин',
                'patronymic' => 'Викторович',
                'surname' => 'Белов',
                'email' => 'belov@example.com',
                'phone' => '+7 (999) 505-05-05',
                'address' => 'г. Москва, ул. Мира, д. 25',
                'birth_date' => '1983-05-12',
                'comments' => 'Постоянный клиент',
                'created_at' => '2026-05-08 13:00:00',
                'updated_at' => '2026-05-08 13:00:00'
            ],
            [
                'name' => 'Юлия',
                'patronymic' => 'Максимовна',
                'surname' => 'Григорьева',
                'email' => 'grigorieva@example.com',
                'phone' => '+7 (999) 606-06-06',
                'address' => 'г. Москва, ул. Тепличная, д. 5',
                'birth_date' => '1994-05-15',
                'comments' => 'Любит тюльпаны',
                'created_at' => '2026-05-10 10:00:00',
                'updated_at' => '2026-05-10 10:00:00'
            ],
            [
                'name' => 'Роман',
                'patronymic' => 'Евгеньевич',
                'surname' => 'Андреев',
                'email' => 'andreev@example.com',
                'phone' => '+7 (999) 707-07-07',
                'address' => 'г. Москва, ул. Луговая, д. 8',
                'birth_date' => '1986-05-18',
                'comments' => 'Первый заказ',
                'created_at' => '2026-05-12 15:00:00',
                'updated_at' => '2026-05-12 15:00:00'
            ],
            [
                'name' => 'Ангелина',
                'patronymic' => 'Игоревна',
                'surname' => 'Крылова',
                'email' => 'krylova@example.com',
                'phone' => '+7 (999) 808-08-08',
                'address' => 'г. Москва, ул. Речная, д. 12',
                'birth_date' => '1989-05-20',
                'comments' => 'Корпоративный клиент',
                'created_at' => '2026-05-14 09:00:00',
                'updated_at' => '2026-05-14 09:00:00'
            ],
            [
                'name' => 'Кирилл',
                'patronymic' => 'Сергеевич',
                'surname' => 'Алексеев',
                'email' => 'alekseev@example.com',
                'phone' => '+7 (999) 909-09-09',
                'address' => 'г. Москва, ул. Жукова, д. 18',
                'birth_date' => '1996-05-22',
                'comments' => 'Молодой клиент',
                'created_at' => '2026-05-16 11:00:00',
                'updated_at' => '2026-05-16 11:00:00'
            ],
            [
                'name' => 'Виктория',
                'patronymic' => 'Николаевна',
                'surname' => 'Богданова',
                'email' => 'bogdanova@example.com',
                'phone' => '+7 (999) 010-01-01',
                'address' => 'г. Москва, ул. Уральская, д. 3',
                'birth_date' => '1997-05-25',
                'comments' => 'Заказывает на праздники',
                'created_at' => '2026-05-18 14:00:00',
                'updated_at' => '2026-05-18 14:00:00'
            ],
            [
                'name' => 'Глеб',
                'patronymic' => 'Андреевич',
                'surname' => 'Ларионов',
                'email' => 'larionov@example.com',
                'phone' => '+7 (999) 121-12-12',
                'address' => 'г. Москва, ул. Дорожная, д. 7',
                'birth_date' => '1992-05-28',
                'comments' => 'Новый клиент',
                'created_at' => '2026-05-20 16:00:00',
                'updated_at' => '2026-05-20 16:00:00'
            ]
        ]);
    }
}
