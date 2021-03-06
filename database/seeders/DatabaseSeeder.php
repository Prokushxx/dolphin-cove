<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();
        return $this->call([
            UsersSeeder::class,
            PatronsSeeder::class,
            HotelsSeeder::class,
            ProgramsSeeder::class,
            ReservationsSeeder::class,
            SchedulesSeeder::class,
            BookingsSeeder::class,
        ]);
    }
}
