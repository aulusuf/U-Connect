<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Post::insert([
            [
                'user_id'   => '1',
                'post'      => 'ini post dari user 1'
            ],
            [
                'user_id'   => '2',
                'post'      => 'ini post dari user 2'
            ],
        ]);
    }
}
