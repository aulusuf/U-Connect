<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            [
                'user_id'   => '1',
                'post_id'   => '1',
                'comment'   => 'ini comment dari user 1 pada post 1',
            ],
            [
                'user_id'   => '2',
                'post_id'   => '1',
                'comment'   => 'ini comment dari user 2 pada post 1',
            ],
        ]);
    }
}
