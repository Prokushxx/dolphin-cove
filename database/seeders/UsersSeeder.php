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
            'email' => 'bob@gmail.com',
            'password' => 'password1'
        ],
        [
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => 'password'
        ],
        [
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => 'password'
        ],
        [
            'name'=>'test one',
            'email'=>'test1@gmail.com',
            'password'=>'password'
        ],
    ];


    public function run()
    {
        foreach ($this->user as $user) {
            user::create($user);
        }
    }
}
