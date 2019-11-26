<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function makePost(Request $request){
        
        $this->validate($request,[
            'post' => 'required',
        ]);


        $data = new Post();
        $data->user_id = $request->user_id;
        $data->post = $request->post;
        $data->save();


        // Post::create([
        //     'user_id' => $request->id,
        //     'post' => $request->post
        // ]);
        
            return back();
    }

    public function storePost(string $post, int $id){


        Post::create([
            'user_id' => $id,
            'post' => $post
        ]);

        

    }
    public function editPost(Post $post){

    }

    public function makeComment(Request $request){
        Comment::create([
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'comment' => $request->comment
        ]);

        $this->validate($request,[
            'comment' => 'required',
        ]);
    }
}
