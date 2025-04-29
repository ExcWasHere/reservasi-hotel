<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        $reservations = [
            [
                'customer_id' => 1,
                'room_number' => '101',
                'check_in_date' => '2023-05-10',
                'check_out_date' => '2023-05-15',
            ],
            [
                'customer_id' => 2,
                'room_number' => '202',
                'check_in_date' => '2023-05-12',
                'check_out_date' => '2023-05-14',
            ],
            [
                'customer_id' => 3,
                'room_number' => '303',
                'check_in_date' => '2023-05-15',
                'check_out_date' => '2023-05-20',
            ],
            [
                'customer_id' => 4,
                'room_number' => '404',
                'check_in_date' => '2023-05-18',
                'check_out_date' => '2023-05-22',
            ],
            [
                'customer_id' => 5,
                'room_number' => '505',
                'check_in_date' => '2023-05-20',
                'check_out_date' => '2023-05-25',
            ],
        ];

        foreach ($reservations as $reservation) {
            Reservation::create($reservation);
        }
    }
}