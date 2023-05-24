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
            'entryDateTime' => '2023-01-01 08:10:00',
            'exitDateTime' => '2023-01-01 08:30:00',
            'price' => 10.91,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'LSA1C09',
            'entryDateTime' => '2023-01-01 09:10:00',
            'exitDateTime' => '2023-01-01 08:30:00',
            'price' => 20.99,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'LSA1C09',
            'entryDateTime' => '2023-01-01 10:10:00',
            'exitDateTime' => '2023-01-01 08:30:00',
            'price' => 30.78,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'LSA1C09',
            'entryDateTime' => '2023-01-01 11:10:00',
            'exitDateTime' => '2023-01-01 08:30:00',
            'price' => 40.27,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'LSA1C09',
            'entryDateTime' => '2023-01-01 12:10:00',
            'exitDateTime' => '2023-01-01 08:30:00',
            'price' => 50.10,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'LSA1C09',
            'entryDateTime' => '2023-01-01 14:10:00',
            'exitDateTime' => '2023-01-01 16:49:58',
            'price' => 33.10,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'LSA1C09',
            'entryDateTime' => '2023-01-01 17:10:00',
            'exitDateTime' => '2023-01-01 18:20:12',
            'price' => 44.10,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'LSA1C09',
            'entryDateTime' => '2023-01-01 17:45:00',
            'exitDateTime' => '2023-01-01 19:27:43',
            'price' => 88.10,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'RTC4C78',
            'entryDateTime' => '2023-01-01 18:20:00',
            'exitDateTime' => '2023-01-01 22:00:00',
            'price' => 20,
            'user_id' => 1,
        ]);

        ServiceOrders::create([
            'vehiclePlate' => 'KXU3255',
            'entryDateTime' => '2023-01-01 20:37:52',
            'exitDateTime' => '2023-01-01 21:30:00',
            'price' => 20,
            'user_id' => 1,
        ]);
    }
}
