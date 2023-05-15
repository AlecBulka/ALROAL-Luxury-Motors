<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
Use App\Models\Role;
Use App\Models\Carmodel;
Use App\Models\Carbrand;
Use App\Models\Car;
use App\Models\User;
use App\Models\Billing;

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

        $admin = User::create([
            'name' => 'Alec',
            'email' => 'alec@gmail.com',
            'password' => Hash::make('Alec123'),
            'phoneNumber' => 645434565,
            'role_id' => 3
        ]);

        $admin->markEmailAsVerified();

        $employee = User::create([
            'name' => 'Roger',
            'email' => 'roger@gmail.com',
            'password' => Hash::make('Roger123'),
            'phoneNumber' => 654123789,
            'role_id' => 2
        ]);

        $employee->markEmailAsVerified();

        $user = User::create([
            'name' => 'Alex',
            'email' => 'alex@gmail.com',
            'password' => Hash::make('Alex123'),
            'phoneNumber' => 789765456,
            'role_id' => 1
        ]);

        $user->markEmailAsVerified();

        Billing::create([
            'user_id' => 1
        ]);

        Billing::create([
            'user_id' => 2
        ]);

        Billing::create([
            'user_id' => 3
        ]);

        Carbrand::create([
            'name' => 'Lamborghini'
        ]);

        Carmodel::create([
            'name' => 'Revuelto',
            'carbrand_id' => 1
        ]);

        Carmodel::create([
            'name' => 'Huracan STO',
            'carbrand_id' => 1
        ]);

        Carmodel::create([
            'name' => 'Huracan Tecnica',
            'carbrand_id' => 1
        ]);

        Carmodel::create([
            'name' => 'Huracan Sterrato',
            'carbrand_id' => 1
        ]);

        Carmodel::create([
            'name' => 'Urus S',
            'carbrand_id' => 1
        ]);

        Carmodel::create([
            'name' => 'Sian Roadster',
            'carbrand_id' => 1
        ]);

        Carbrand::create([
            'name' => 'Ferrari'
        ]);

        Carmodel::create([
            'name' => 'Purosangue',
            'carbrand_id' => 2
        ]);

        Carmodel::create([
            'name' => '296 GTB',
            'carbrand_id' => 2
        ]);

        Carmodel::create([
            'name' => '296 GTS',
            'carbrand_id' => 2
        ]);

        Carmodel::create([
            'name' => 'SF90 Stradale',
            'carbrand_id' => 2
        ]);

        Carmodel::create([
            'name' => 'F8 Tributo',
            'carbrand_id' => 2
        ]);

        Carbrand::create([
            'name' => 'Aston Martin'
        ]);

        Carmodel::create([
            'name' => 'DBX',
            'carbrand_id' => 3
        ]);

        Carmodel::create([
            'name' => 'Vantage',
            'carbrand_id' => 3
        ]);

        Carmodel::create([
            'name' => 'DB11',
            'carbrand_id' => 3
        ]);

        Carmodel::create([
            'name' => 'DBS',
            'carbrand_id' => 3
        ]);

        Carmodel::create([
            'name' => 'Valkyrie',
            'carbrand_id' => 3
        ]);

        Carmodel::create([
            'name' => 'Valhalla',
            'carbrand_id' => 3
        ]);

        Carbrand::create([
            'name' => 'McLaren'
        ]);

        Carmodel::create([
            'name' => '750S',
            'carbrand_id' => 4
        ]);

        Carmodel::create([
            'name' => 'Artura',
            'carbrand_id' => 4
        ]);

        Carmodel::create([
            'name' => '765LT',
            'carbrand_id' => 4
        ]);

        Carmodel::create([
            'name' => '720S',
            'carbrand_id' => 4
        ]);

        Carmodel::create([
            'name' => '675LT',
            'carbrand_id' => 4
        ]);

        Carmodel::create([
            'name' => 'P1',
            'carbrand_id' => 4
        ]);

        Carmodel::create([
            'name' => 'Senna',
            'carbrand_id' => 4
        ]);

        Carbrand::create([
            'name' => 'Bugatti'
        ]);

        Carmodel::create([
            'name' => 'Chiron',
            'carbrand_id' => 5
        ]);

        Carmodel::create([
            'name' => 'Veyron',
            'carbrand_id' => 5
        ]);

        Carmodel::create([
            'name' => 'W16 Mistral',
            'carbrand_id' => 5
        ]);

        Carmodel::create([
            'name' => 'Divo',
            'carbrand_id' => 5
        ]);

        Carmodel::create([
            'name' => 'Centodieci',
            'carbrand_id' => 5
        ]);

        Carmodel::create([
            'name' => 'La Voiture Noire',
            'carbrand_id' => 5
        ]);

        Carbrand::create([
            'name' => 'Porsche'
        ]);

        Carmodel::create([
            'name' => '911 GT3',
            'carbrand_id' => 6
        ]);

        Carmodel::create([
            'name' => '911 GT3 RS',
            'carbrand_id' => 6
        ]);

        Carmodel::create([
            'name' => '911 Turbo S',
            'carbrand_id' => 6
        ]);

        Carmodel::create([
            'name' => '911 Carrera 4S',
            'carbrand_id' => 6
        ]);

        Carmodel::create([
            'name' => '718 Cayman GT4',
            'carbrand_id' => 6
        ]);

        Carmodel::create([
            'name' => '718 Cayman GT4 RS',
            'carbrand_id' => 6
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
            'isSold' => false,
            'image' => 'Lamborghini-Huracan-STO.jpg'
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
            'isSold' => false,
            'image' => 'Ferrari-Purosangue.jpg'
        ]);
    }
}
