<?php

namespace Database\Seeders;

use App\Models\ServiceOrders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceOrders::create([
            'vehiclePlate' => 'LSA1C09',
            'entryDateTime' => '2023-01-01 10:10:00',
            'price' => 10,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'RTC4C78',
            'entryDateTime' => '2023-01-01 10:20:00',
            'price' => 20,
            'user_id' => 1,
        ]);
    }
}
