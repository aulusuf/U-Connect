<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::insert([
            // [
            //     'name'      => 'Yusuf',
            //     'gender'    => 'male',
            //     'slug'      => 'yusuf',
            //     'pic'       => 'user-solid-circle.svg',
            //     'cover'     => 'asd.jpg',
            //     'email'     => 'yusuf@email',
            //     'password'  => '$2y$12$TrdZhFgHUsSBU2vJOX/YyeR1WBjwUj3Rxz7vCObgJ0RgKgXR/Zb8y',
            // ],
            // [
            //     'name'      => 'Firjaun',
            //     'gender'    => 'male',
            //     'slug'      => 'firjaun',
            //     'pic'       => 'user-solid-circle.svg',
            //     'cover'     => 'asd.jpg',
            //     'email'     => 'firjaun@email',
            //     'password'  => '$2y$12$TrdZhFgHUsSBU2vJOX/YyeR1WBjwUj3Rxz7vCObgJ0RgKgXR/Zb8y',
            // ],
            [
                'name'      => 'Hadi',
                'gender'    => 'male',
                'slug'      => 'hadi',
                'pic'       => 'user-solid-circle.svg',
                'cover'     => 'asd.jpg',
                'email'     => 'hadi@email',
                'password'  => '$2y$12$TrdZhFgHUsSBU2vJOX/YyeR1WBjwUj3Rxz7vCObgJ0RgKgXR/Zb8y',
            ],
            [
                'name'      => 'Ana',
                'gender'    => 'female',
                'slug'      => 'ana',
                'pic'       => 'user-solid-circle.svg',
                'cover'     => 'asd.jpg',
                'email'     => 'ana@email',
                'password'  => '$2y$12$TrdZhFgHUsSBU2vJOX/YyeR1WBjwUj3Rxz7vCObgJ0RgKgXR/Zb8y',
            ],
        ]);
    }
}
