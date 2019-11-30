<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request){
        
        $this->validate($request,[
            'post' => 'required',
        ]);

        Post::create([
            'user_id' => $request->user_id,
            'post' => $request->post
        ]);
        
            return back();
    }

    public function editPost($id){
        
        $post = Post::find($id);

        

    }
    public function update($id){
        
        $post = Post::find($id);

        

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
