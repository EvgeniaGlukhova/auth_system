<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            // Администратор (role_id = 1)
            [
                'role_id' => 1,
                'surname' => 'Администраторов',
                'name' => 'Админ',
                'patronymic' => 'Админович',
                'email' => 'admin@mail.com',
                'phone' => '+7 (999) 111-22-33',
                'email_verified_at' => '2026-04-01 09:00:00',
                'password' => Hash::make('123456'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Флорист (role_id = 2)
            [
                'role_id' => 2,
                'surname' => 'Флористов',
                'name' => 'Анна',
                'patronymic' => 'Сергеевна',
                'email' => 'florist@mail.com',
                'phone' => '+7 (999) 222-33-44',
                'email_verified_at' => '2026-04-01 09:00:00',
                'password' => Hash::make('123456'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Продавец (role_id = 3)
            [
                'role_id' => 3,
                'surname' => 'Продавцова',
                'name' => 'Елена',
                'patronymic' => 'Владимировна',
                'email' => 'seller@mail.com',
                'phone' => '+7 (999) 333-44-55',
                'email_verified_at' => '2026-04-01 09:00:00',
                'password' => Hash::make('123456'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Продавец-флорист (role_id = 4)
            [
                'role_id' => 4,
                'surname' => 'Универсалова',
                'name' => 'Мария',
                'patronymic' => 'Ивановна',
                'email' => 'sellerflorist@mail.com',
                'phone' => '+7 (999) 444-55-66',
                'email_verified_at' => '2026-04-05 09:00:00',
                'password' => Hash::make('123456'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_id' => 5,
                'surname' => 'Курьеров',
                'name' => 'Иван',
                'patronymic' => 'Петрович',
                'email' => 'courier@mail.com',
                'phone' => '+7 (999) 555-66-77',
                'email_verified_at' => '2026-04-01 09:00:00',
                'password' => Hash::make('123456'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
