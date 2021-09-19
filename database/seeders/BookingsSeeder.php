<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $booking = [
        [
            'patron_id' => 3,
            'company_id' => 3,
            'hotel_id' => 2,
            'schedule_id' => 2,
            'status' => 'paid',
            'payment_method' => 'cash',
        ],
        [
            'patron_id' => 1,
            'company_id' => 1,
            'hotel_id' => 2,
            'schedule_id' => 1,
            'status' => 'paid',
            'payment_method' => 'cash',
        ],
        [
            'patron_id' => 2,
            'company_id' => 2,
            'hotel_id' => 1,
            'schedule_id' => 3,
            'status' => 'pending',
            'payment_method' => 'credit',
        ],
    ];

    public function run()
    {
        foreach ($this->booking as $booking) {
            Booking::create($booking);
        }
    }
}
