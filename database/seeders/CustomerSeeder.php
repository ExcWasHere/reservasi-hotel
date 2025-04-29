<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $customers = [
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'phone' => '081234567890',
                'address' => 'Jl. Merdeka No. 123, Jakarta'
            ],
            [
                'name' => 'Siti Rahayu',
                'email' => 'siti@example.com',
                'phone' => '082345678901',
                'address' => 'Jl. Pahlawan No. 45, Bandung'
            ],
            [
                'name' => 'Andi Wijaya',
                'email' => 'andi@example.com',
                'phone' => '083456789012',
                'address' => 'Jl. Sudirman No. 67, Surabaya'
            ],
            [
                'name' => 'Dewi Lestari',
                'email' => 'dewi@example.com',
                'phone' => '084567890123',
                'address' => 'Jl. Gajah Mada No. 89, Yogyakarta'
            ],
            [
                'name' => 'Rudi Hartono',
                'email' => 'rudi@example.com',
                'phone' => '085678901234',
                'address' => 'Jl. Diponegoro No. 12, Semarang'
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}