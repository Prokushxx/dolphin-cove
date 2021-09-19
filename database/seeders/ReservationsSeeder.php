<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $reservation = [
        [
            'company_name' => 'Walk In',
        ],
        [
            'company_name' => 'Offshore',
        ],
        [
            'company_name' => 'Glory Sights',
        ],
        [
            'company_name' => 'Lighthouse',
        ],
    ];

    public function run()
    {
        foreach ($this->reservation as $reservation) {
            Reservation::create($reservation);
        }
    }
}
