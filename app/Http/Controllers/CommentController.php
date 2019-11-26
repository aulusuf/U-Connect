<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function makeComment(Request $request, $id){
        
        $post_id = Post::where('id', $id)->get();

        // dd($request, $post_id);

        $this->validate($request, [
            'comment' => 'required',
        ]);

        // Comment::create([
        //     'user_id' => $request->id,
        //     'post_id' => $post_id,
        //     'comment' => $request->comment
        // ]);
        $data = new Comment(); //comment() berasal dari validate
        $data->user_id = $request->user_id; //$data->user_id ngisi di db, $request->user_id ambil dari field name
        $data->post_id = $request->post_id;
        $data->comment = $request->comment;
        $data->save();
        return back();
    }

    public function editComment(){

    }
}
