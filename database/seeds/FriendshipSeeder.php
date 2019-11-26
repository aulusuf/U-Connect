<?php

use App\Friendship;
use Illuminate\Database\Seeder;

class FriendshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Friendship::insert([
            [
                'requester'         => 2,
                'user_requested'    => 1,
                'state'             => 1,
            ],
            // [
            //     'requester'         => 3,
            //     'user_requested'    => 1,
            //     'state'             => 0
            // ],
            // [
            //     'requester'         => 2,
            //     'user_requested'    => 1,
            //     'state'             => 0
            // ],
        ]);
    }
}
