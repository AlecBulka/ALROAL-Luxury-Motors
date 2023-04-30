<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Role;
Use App\Models\Carmodel;
Use App\Models\Carbrand;
Use App\Models\Car;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'role' => 'user',
            'description' => 'User'
        ]);

        Role::create([
            'role' => 'employee',
            'description' => 'Employee'
        ]);

        Role::create([
            'role' => 'admin',
            'description' => 'Admin'
        ]);

        Carbrand::create([
            'name' => 'Lamborghini'
        ]);

        Carbrand::create([
            'name' => 'Ferrari'
        ]);

        Carmodel::create([
            'name' => 'Huracan STO',
            'carbrand_id' => 1
        ]);

        Carmodel::create([
            'name' => 'Purosangue',
            'carbrand_id' => 2
        ]);

        Car::create([
            'name' => 'Lamborghini Huracan STO',
            'horsepower' => 640,
            'torque' => 565,
            'consumption' => 13.9,
            'topSpeed' => 310,
            'acceleration' => 3.0,
            'engine' => 'V10',
            'wheels' => '245/30 R20',
            'tires' => '8.5J X 20',
            'driveTrain' => 'RWD',
            'gearbox' => '7-Speed Dual-Clutch',
            'exterior' => 'Red',
            'interior' => 'Black',
            'kilometers' => 2500,
            'price' => 250000,
            'carmodel_id' => 1,
            'carbrand_id' => 1,
            'year' => 2022,
            'isSold' => false
        ]);

        Car::create([
            'name' => 'Ferrari Purosangue',
            'horsepower' => 715,
            'torque' => 528,
            'consumption' => 17.3,
            'topSpeed' => 310,
            'acceleration' => 3.3,
            'engine' => 'V12',
            'wheels' => '245/30 R20',
            'tires' => '8.5J X 20',
            'driveTrain' => 'AWD',
            'gearbox' => '8-Speed Dual-Clutch',
            'exterior' => 'Black',
            'interior' => 'Black',
            'kilometers' => 300,
            'price' => 450000,
            'carmodel_id' => 2,
            'carbrand_id' => 2,
            'year' => 2024,
            'isSold' => false
        ]);
    }
}
