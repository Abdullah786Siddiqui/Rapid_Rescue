<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DriverSeeder extends Seeder
{
    public function run()
    {
        // Array of 20 sample driver names & emails
        $drivers = [
            ['name' => 'Abdullah Siddiqui', 'email' => 'abdullahsidzz333@gmail.com'],
            ['name' => 'Ali Khan', 'email' => 'alikhan123@gmail.com'],
            ['name' => 'Sara Ahmed', 'email' => 'sara.ahmed@gmail.com'],
            ['name' => 'Usman Malik', 'email' => 'usman.malik@gmail.com'],
            ['name' => 'Hina Noor', 'email' => 'hina.noor@gmail.com'],
            ['name' => 'Ahmed Raza', 'email' => 'ahmed.raza@gmail.com'],
            ['name' => 'Fatima Khan', 'email' => 'fatima.khan@gmail.com'],
            ['name' => 'Bilal Shah', 'email' => 'bilal.shah@gmail.com'],
            ['name' => 'Maria Iqbal', 'email' => 'maria.iqbal@gmail.com'],
            ['name' => 'Owais Tariq', 'email' => 'owais.tariq@gmail.com'],
            ['name' => 'Zoya Khan', 'email' => 'zoya.khan@gmail.com'],
            ['name' => 'Hamza Ali', 'email' => 'hamza.ali@gmail.com'],
            ['name' => 'Noor Fatima', 'email' => 'noor.fatima@gmail.com'],
            ['name' => 'Saad Sheikh', 'email' => 'saad.sheikh@gmail.com'],
            ['name' => 'Ayesha Malik', 'email' => 'ayesha.malik@gmail.com'],
            ['name' => 'Imran Ali', 'email' => 'imran.ali@gmail.com'],
            ['name' => 'Hira Khan', 'email' => 'hira.khan@gmail.com'],
            ['name' => 'Tariq Javed', 'email' => 'tariq.javed@gmail.com'],
            ['name' => 'Zainab Noor', 'email' => 'zainab.noor@gmail.com'],
            ['name' => 'Farhan Khan', 'email' => 'farhan.khan@gmail.com'],
        ];

        foreach ($drivers as $index => $data) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt('123456'), // default password
                'role' => 'driver',
            ]);

            // Generate random data for driver profile
            $statusOptions = ['OFF_DUTY', 'AVAILABLE', 'ASSIGNED', 'IN_TRANSIT', 'UNAVAILABLE'];
            $status = $statusOptions[array_rand($statusOptions)];

            $user->driverProfile()->create([
                'license_number' => '32424242' . rand(10,99),
                'license_expiry' => now()->addYears(rand(1,3))->format('Y-m-d'),
                'driverLicenseUrl' => 'drivers/licenses/license' . ($index+1) . '.png',
                'driverNicUrl' => 'drivers/nics/nic' . ($index+1) . '.png',
                'driverProfileUrl' => 'drivers/profile/tFFqk13G8sLXDU6HzuMfT2vaV7wNQj1IIGvha2s1.jpg',
                'phone' => '03' . rand(100000000, 999999999),
                'address' => rand(1, 50) . ' Main Street, City',
                'dob' => now()->subYears(rand(22,35))->format('Y-m-d'),
                'hiredate' => now()->subDays(rand(0,365))->format('Y-m-d'),
                'status' => $status,
            ]);
        }
    }
}
