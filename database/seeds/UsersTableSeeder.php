<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Janet Smithset',
            'email'     => 'janetka@gmail.com',
            'password'  => Hash::make('tostik'),
            'saved'     => [1,5,6,9]
        ]);
        User::create([
            'name'      => 'Josh Doe',
            'email'     => 'htmldec@gmail.com',
            'password'  => Hash::make('44r4see3e4e4eeeee455r4re4'),
            'saved'     => [2,11,21]
        ]);
    }
}
