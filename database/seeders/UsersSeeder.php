<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $user = [
        [
            'name' => 'bob',
            'email' => 'bob@email.com',
            'password' =>
            '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ],
        [
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ],
        [
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password'
        ],
    ];


    public function run()
    {
        foreach ($this->user as $user) {
            user::create($user);
        }
    }
}
