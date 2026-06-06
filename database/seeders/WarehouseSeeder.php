<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('warehouses')->insert([
            ['flower_id' => 1, 'quantity' => 120, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 2, 'quantity' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 3, 'quantity' => 110, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 4, 'quantity' => 250, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 5, 'quantity' => 220, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 6, 'quantity' => 200, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 7, 'quantity' => 80, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 8, 'quantity' => 70, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 9, 'quantity' => 65, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 10, 'quantity' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 11, 'quantity' => 140, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 12, 'quantity' => 200, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 13, 'quantity' => 190, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 14, 'quantity' => 60, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 15, 'quantity' => 55, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 16, 'quantity' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 17, 'quantity' => 40, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 18, 'quantity' => 300, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 19, 'quantity' => 400, 'created_at' => now(), 'updated_at' => now()],
            ['flower_id' => 20, 'quantity' => 120, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
