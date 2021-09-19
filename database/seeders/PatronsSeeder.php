<?php

namespace Database\Seeders;

use App\Models\Patron;
use Illuminate\Database\Seeder;

class PatronsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $patron = [
        [
            'f_name' => 'Bob',
            'l_name' => 'Smith',
            'email' => 'bob@gmail.com',
        ],
        [
            'f_name' => 'Clair',
            'l_name' => 'Jones',
            'email' => 'clair@gmail.com',
        ],
        [
            'f_name' => 'Sara',
            'l_name' => 'May',
            'email' => 'sara@gmail.com',
        ],
    ];

    public function run()
    {
        foreach ($this->patron as $patron) {
            Patron::create($patron);
        }
    }
}
