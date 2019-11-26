<?php

use Illuminate\Database\Seeder;
use App\FriendshipState;

class FriendshipStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FriendshipState::insert([
            [
                'state'   => 'following',
            ],
            [
                'state'   => 'not following',
            ],
        ]);
    }
}
