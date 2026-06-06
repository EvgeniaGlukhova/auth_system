<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'company_name' => 'ООО "Цветочный рай"',
                'responsible_person' => 'Смирнов Петр Алексеевич',
                'email' => 'info@flower-paradise.ru',
                'phone' => '+7 (495) 123-45-01',
                'address' => 'г. Москва, ул. Садовая, д. 100',
                'contract_start' => '2026-01-01',
                'contract_end' => '2026-12-31',
                'comments' => 'Основной поставщик',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ИП "Зеленый мир"',
                'responsible_person' => 'Козлова Анна Викторовна',
                'email' => 'green.world@mail.ru',
                'phone' => '+7 (495) 987-65-02',
                'address' => 'г. Москва, ул. Оранжерейная, д. 25',
                'contract_start' => '2026-02-01',
                'contract_end' => '2026-12-31',
                'comments' => 'Экзотические цветы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ООО "Флора Экспресс"',
                'responsible_person' => 'Михайлов Дмитрий Игоревич',
                'email' => 'flora.express@yandex.ru',
                'phone' => '+7 (495) 555-12-03',
                'address' => 'г. Москва, ул. Тепличная, д. 8',
                'contract_start' => '2026-03-01',
                'contract_end' => '2026-12-31',
                'comments' => 'Срочная доставка',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'Агрофирма "Букет"',
                'responsible_person' => 'Петрова Елена Михайловна',
                'email' => 'biket@agro.ru',
                'phone' => '+7 (495) 444-44-04',
                'address' => 'г. Москва, ул. Аграрная, д. 15',
                'contract_start' => '2026-01-15',
                'contract_end' => '2026-12-15',
                'comments' => 'Крупный поставщик',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'Цветочный дом "Роза"',
                'responsible_person' => 'Волков Андрей Сергеевич',
                'email' => 'dom-roza@mail.ru',
                'phone' => '+7 (495) 333-33-05',
                'address' => 'г. Москва, ул. Розовая, д. 5',
                'contract_start' => '2026-02-10',
                'contract_end' => '2026-11-10',
                'comments' => 'Поставщик роз',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ИП "Тюльпан"',
                'responsible_person' => 'Соколова Ирина Владимировна',
                'email' => 'tulip@yandex.ru',
                'phone' => '+7 (495) 222-22-06',
                'address' => 'г. Москва, ул. Цветочная, д. 10',
                'contract_start' => '2026-03-15',
                'contract_end' => '2026-12-31',
                'comments' => 'Поставщик тюльпанов',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ООО "Лилия"',
                'responsible_person' => 'Морозов Денис Павлович',
                'email' => 'lilia@lilia.ru',
                'phone' => '+7 (495) 111-11-07',
                'address' => 'г. Москва, ул. Луговая, д. 20',
                'contract_start' => '2026-01-20',
                'contract_end' => '2026-12-20',
                'comments' => 'Поставщик лилий',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'Фермерское хозяйство "Весна"',
                'responsible_person' => 'Кузнецов Алексей Владимирович',
                'email' => 'vesna@fermer.ru',
                'phone' => '+7 (495) 666-66-08',
                'address' => 'г. Москва, ул. Полевая, д. 3',
                'contract_start' => '2026-02-20',
                'contract_end' => '2026-10-20',
                'comments' => 'Сезонные цветы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ООО "Экзофлора"',
                'responsible_person' => 'Новикова Татьяна Алексеевна',
                'email' => 'exoflora@mail.ru',
                'phone' => '+7 (495) 777-77-09',
                'address' => 'г. Москва, ул. Экзотическая, д. 12',
                'contract_start' => '2026-03-01',
                'contract_end' => '2026-12-01',
                'comments' => 'Экзотические растения',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'Теплицы "Подмосковье"',
                'responsible_person' => 'Степанов Михаил Игоревич',
                'email' => 'teplica@podmoskovie.ru',
                'phone' => '+7 (495) 888-88-10',
                'address' => 'г. Москва, ул. Тепличная, д. 50',
                'contract_start' => '2026-01-05',
                'contract_end' => '2026-12-05',
                'comments' => 'Свежие цветы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'Цветочный оптовик "Астра"',
                'responsible_person' => 'Павлова Екатерина Сергеевна',
                'email' => 'astra@opt.ru',
                'phone' => '+7 (495) 999-99-11',
                'address' => 'г. Москва, ул. Оптовая, д. 7',
                'contract_start' => '2026-02-01',
                'contract_end' => '2026-11-01',
                'comments' => 'Оптовые поставки',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ИП "Гладиолус"',
                'responsible_person' => 'Андреев Василий Николаевич',
                'email' => 'gladiolus@mail.ru',
                'phone' => '+7 (495) 101-01-12',
                'address' => 'г. Москва, ул. Садовая, д. 45',
                'contract_start' => '2026-03-10',
                'contract_end' => '2026-10-10',
                'comments' => 'Летние цветы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ООО "Пион"',
                'responsible_person' => 'Крылова Анна Дмитриевна',
                'email' => 'peony@peony.ru',
                'phone' => '+7 (495) 202-02-13',
                'address' => 'г. Москва, ул. Пионерская, д. 3',
                'contract_start' => '2026-01-25',
                'contract_end' => '2026-12-25',
                'comments' => 'Пионы и розы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'Флористический центр "Букет"',
                'responsible_person' => 'Белов Иван Сергеевич',
                'email' => 'center@buquet.ru',
                'phone' => '+7 (495) 303-03-14',
                'address' => 'г. Москва, ул. Флористов, д. 8',
                'contract_start' => '2026-02-15',
                'contract_end' => '2026-12-15',
                'comments' => 'Широкий ассортимент',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ИП "Хризантема"',
                'responsible_person' => 'Тихонова Ольга Викторовна',
                'email' => 'chrysanthemum@mail.ru',
                'phone' => '+7 (495) 404-04-15',
                'address' => 'г. Москва, ул. Осенняя, д. 12',
                'contract_start' => '2026-03-20',
                'contract_end' => '2026-11-20',
                'comments' => 'Осенние цветы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'Агропром "Цветиндустрия"',
                'responsible_person' => 'Григорьев Павел Андреевич',
                'email' => 'agroprom@cvet.ru',
                'phone' => '+7 (495) 505-05-16',
                'address' => 'г. Москва, ул. Промышленная, д. 25',
                'contract_start' => '2026-01-10',
                'contract_end' => '2026-12-10',
                'comments' => 'Промышленные масштабы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ООО "Орхидея"',
                'responsible_person' => 'Ларионова Мария Сергеевна',
                'email' => 'orchid@orchid.ru',
                'phone' => '+7 (495) 606-06-17',
                'address' => 'г. Москва, ул. Тропическая, д. 6',
                'contract_start' => '2026-02-05',
                'contract_end' => '2026-12-05',
                'comments' => 'Орхидеи',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'Цветочный маркет "Флора"',
                'responsible_person' => 'Богданова Елена Владимировна',
                'email' => 'flora@market.ru',
                'phone' => '+7 (495) 707-07-18',
                'address' => 'г. Москва, ул. Рыночная, д. 3',
                'contract_start' => '2026-03-05',
                'contract_end' => '2026-12-05',
                'comments' => 'Розничный рынок',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ИП "Василек"',
                'responsible_person' => 'Алексеев Сергей Николаевич',
                'email' => 'vasilek@mail.ru',
                'phone' => '+7 (495) 808-08-19',
                'address' => 'г. Москва, ул. Полевая, д. 15',
                'contract_start' => '2026-01-30',
                'contract_end' => '2026-10-30',
                'comments' => 'Полевые цветы',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'ООО "Ромашка"',
                'responsible_person' => 'Захаров Андрей Павлович',
                'email' => 'romashka@romashka.ru',
                'phone' => '+7 (495) 909-09-20',
                'address' => 'г. Москва, ул. Дорожная, д. 9',
                'contract_start' => '2026-02-28',
                'contract_end' => '2026-12-31',
                'comments' => 'Ромашки и полевые',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
