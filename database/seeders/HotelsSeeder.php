<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $hotel = [
        [
            'hotel_name' => 'Hilton',
        ],
        [
            'hotel_name' => 'Rio',
        ],
        [
            'hotel_name' => 'Iberostar',
        ],
    ];

    public function run()
    {
        foreach ($this->hotel as $hotel) {
            Hotel::create($hotel);
        }
    }
}
