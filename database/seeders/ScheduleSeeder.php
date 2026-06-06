<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $schedules = [];

        // Рабочие дни в мае 2026 (1-31)
        for ($day = 1; $day <= 31; $day++) {
            $date = "2026-05-" . str_pad($day, 2, '0', STR_PAD_LEFT);

            // Определяем выходные (суббота = 6, воскресенье = 7)
            $weekend = (date('N', strtotime($date)) >= 6);

            // Админ (9-18)
            $schedules[] = [
                'user_id' => 1,
                'date' => $date,
                'start_time' => $weekend ? null : '09:00',
                'end_time' => $weekend ? null : '18:00',
                'weekend' => $weekend,
                'created_at' => now(),
                'updated_at' => now()
            ];

            // Флорист (10-16)
            $schedules[] = [
                'user_id' => 2,
                'date' => $date,
                'start_time' => $weekend ? null : '10:00',
                'end_time' => $weekend ? null : '16:00',
                'weekend' => $weekend,
                'created_at' => now(),
                'updated_at' => now()
            ];

            // Продавец (12-20)
            $schedules[] = [
                'user_id' => 3,
                'date' => $date,
                'start_time' => $weekend ? null : '12:00',
                'end_time' => $weekend ? null : '20:00',
                'weekend' => $weekend,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('schedules')->insert($schedules);
    }
}
