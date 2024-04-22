<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\User;
use App\Models\Vehicle;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Vehicle::factory()->create(
            [
                'type' => 'GOODS',
                'brand' => 'FORD',
                'model' => 'Pickup Truck',
                'plat_number' => '292ER',
                'fuel_consumtion' => 'SOLAR',
                'last_service_date' => '2024-04-21'
            ]
        );
        Vehicle::factory()->create(
            [
                'type' => 'PERSON',
                'brand' => 'YAMAHA',
                'model' => 'BUS PARIWISATA',
                'plat_number' => '22999HD',
                'fuel_consumtion' => 'SOLAR',
                'last_service_date' => '2024-04-21'
            ]
        );
        Driver::factory(5)->create();
    }
}
