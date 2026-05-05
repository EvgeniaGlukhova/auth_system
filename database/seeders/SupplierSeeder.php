<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        Supplier::create([
            'company_name' => 'ООО "Цветочный рай"',
            'responsible_person' => 'Смирнов Петр Алексеевич',
            'email' => 'info@flower-paradise.ru',
            'phone' => '+7 (495) 123-45-67',
            'address' => 'г. Москва, ул. Садовая, д. 100',
            'contract_start' => '2024-01-01',
            'contract_end' => '2025-12-31',
            'comments' => 'Основной поставщик роз и тюльпанов',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Supplier::create([
            'company_name' => 'ИП "Зеленый мир"',
            'responsible_person' => 'Козлова Анна Викторовна',
            'email' => 'green.world@mail.ru',
            'phone' => '+7 (495) 987-65-43',
            'address' => 'г. Москва, ул. Оранжерейная, д. 25',
            'contract_start' => '2024-03-01',
            'contract_end' => '2024-12-31',
            'comments' => 'Поставщик экзотических цветов',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Supplier::create([
            'company_name' => 'ООО "Флора Экспресс"',
            'responsible_person' => 'Михайлов Дмитрий Игоревич',
            'email' => 'flora.express@yandex.ru',
            'phone' => '+7 (495) 555-12-34',
            'address' => 'г. Москва, ул. Тепличная, д. 8',
            'contract_start' => '2024-02-15',
            'contract_end' => '2025-02-14',
            'comments' => 'Срочная доставка цветов',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
