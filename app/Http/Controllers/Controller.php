<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    // public function makePost(Request $request){
        
    //     Post::create([
    //         'user_id' => $request->id,
    //         'post' => $request->post
    //     ]);
    //     $this->validate($request,[
    //         'post' => 'required',
    //     ]);
        
    //         return back();
    // }
    // public function editPost($id){

    // }

    // public function makeComment(Request $request){

    //     $this->validate($request, [
    //         'comment' => 'required',
    //     ]);

    //     Comment::create([
    //         'user_id' => auth()->id(),
    //         'post_id' => $request->post_id,
    //         'comment' => $request->comment
    //     ]);
    // }
}
