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
    protected $user =[
        [
            'name'=>'bob',
            'email'=>'bob@gmail.com',
            'password'=>'password1'
        ],
    ];


    public function run()
    {
        foreach ($this->user as $user)
        {
            user::create($user);
        }
    }
}
