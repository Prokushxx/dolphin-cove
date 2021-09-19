<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $program = [
        [
            'p_name' => 'Hiking',
            'p_costs' => 3000,
        ],
        [
            'p_name' => 'Rowing',
            'p_costs' => 2000,
        ],
        [
            'p_name' => 'Diving',
            'p_costs' => 2500,
        ],
    ];
    public function run()
    {
        foreach ($this->program as $program) {
            Program::create($program);
        }
    }
}
