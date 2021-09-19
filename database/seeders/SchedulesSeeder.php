<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $schedule = [
        [
            'program_id' => 3,
            'exc_date' => '12/10/2021',
        ],
        [
            'program_id' => 1,
            'exc_date' => '12/11/2021',
        ],
        [
            'program_id' => 3,
            'exc_date' => '12/12/2021',
        ],
    ];

    public function run()
    {
        foreach ($this->schedule as $schedule) {
            Schedule::create($schedule);
        }
    }
}
