<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshiftSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('workshifts')->insert([
            // Смены администратора (user_id = 1)
            [
                'user_id' => 1,
                'date' => '2026-05-03',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-04',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-05',
                'start_time' => '09:00:00',
                'end_time' => '14:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-11',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-12',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-13',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-14',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-15',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-17',
                'start_time' => '10:00:00',
                'end_time' => '16:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-18',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-19',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'date' => '2026-05-20',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Смены флориста (user_id = 2)
            [
                'user_id' => 2,
                'date' => '2026-05-03',
                'start_time' => '10:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'date' => '2026-05-04',
                'start_time' => '10:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'date' => '2026-05-05',
                'start_time' => '12:00:00',
                'end_time' => '20:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'date' => '2026-05-10',
                'start_time' => '10:00:00',
                'end_time' => '15:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'date' => '2026-05-11',
                'start_time' => '10:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'date' => '2026-05-12',
                'start_time' => '10:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'date' => '2026-05-13',
                'start_time' => '10:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'date' => '2026-05-14',
                'start_time' => '10:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'date' => '2026-05-15',
                'start_time' => '10:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Смены продавца (user_id = 3)
            [
                'user_id' => 3,
                'date' => '2026-05-03',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-04',
                'start_time' => '11:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-05',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-07',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-08',
                'start_time' => '12:00:00',
                'end_time' => '20:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-11',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-12',
                'start_time' => '12:00:00',
                'end_time' => '20:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-13',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-14',
                'start_time' => '11:00:00',
                'end_time' => '19:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'date' => '2026-05-15',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'closed' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
