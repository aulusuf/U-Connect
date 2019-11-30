<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id){

        $this->validate($request, [
            'comment' => 'required',
        ]);

        Comment::create([
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'comment' => $request->comment
        ]);
        return back();
    }

    public function edit(Request $request, $id){

        $comment = Comment::findOrFail($id);
        
    }

    public function update(Request $request, $id){

        $this->validate($request,[
            'comment' => 'required',
        ]);

        $comment = Comment::where('id', $id)->update([
            'comment' => $request->comment
        ]);

        return back();
    }

    public function delete($id){

        $comment = Comment::find($id);

        $comment->delete();

        return redirect()->back();

    }
}
