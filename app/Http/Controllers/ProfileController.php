<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Friendship;
use App\Post;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Node\Builder;

class ProfileController extends PostController
{
    public function index($id){
        $login      = Auth::user()->id;
        $user       = User::where('id', $id)->first();
        
        $posts      = Post::with(['post_from_user', 'comment_to_post','comment_to_post.comment_from_user'])->where('user_id',$id)->orderBy('created_at','desc')->get();
        $comment    = Comment::where('id',$id)->get();
        
        
        $followers  = Friendship::with('requester_to_user')->where('user_requested',$id)->get();
        $followings = Friendship::with('user_requested_to_user')->where('requester', $id)->get();

        $simpantglpost = array();
        $postsjumlah = count($posts);

        if($id != $login){
            $checkFollow = Friendship::where('requester', $login)->first();
        } else {
            $checkFollow = null;
        }
        

        

        if($postsjumlah == 0){
            return view('profile.index1',[
                'user' => $user,
                'followers' => $followers,
                'followings' => $followings,
                'checkFollow' => $checkFollow

            ]);
        }else{
        foreach($posts as $p) {
            $tgl_post = new Carbon($p->created_at);
            $tgl_skrg = Carbon::now();
            $perbedaan_minggu[] = $tgl_skrg->diffInWeeks($tgl_post);
            $perbedaan_hari[] = $tgl_skrg->diffInDays($tgl_post);
            $perbedaan_jam[] = $tgl_skrg->diffInHours($tgl_post);
            $perbedaan_menit[] = $tgl_skrg->diffInMinutes($tgl_post);
            $perbedaan_detik[] = $tgl_skrg->diffInSeconds($tgl_post);
            $simpantglpost[] = $tgl_post;
        };
        
        $perbedaan = array($perbedaan_minggu, $perbedaan_hari, $perbedaan_jam, $perbedaan_menit, $perbedaan_detik, $simpantglpost);
        $simpanbeda = $this->perbedaan_timeset($perbedaan);
        }
           
    
        return view('profile.index', compact('login','user','posts','followers','followings','simpanbeda','checkFollow' ) );
    }

    public function changePic(Request $request){

        $file = $request->file('picture');
        $filename = $file->getClientOriginalName();

        $path = 'zondicons';
        try {
            $file->move($path, $filename);
            $user_id = Auth::user()->id;
            DB::table('users')->where('id', $user_id)->update(['pic' => $filename]);
            return response()->json([
                'success' => true,
                'data' => [
                    'image' => asset($path . '/' . $filename)
                ]
            ]);
        } catch (\Exception $e) {
            report($e);
            return response()->json([
                'success' => false,
                'data' => null
            ], 500);
        }
        //  untuk upload file, kemudian return lokasi url foto
    }
    public function changeCov(Request $request){

        $file = $request->file('cover');
        $filename = $file->getClientOriginalName();

        $path = 'img';
        try {
            $file->move($path, $filename);
            $user_id = Auth::user()->id;
            DB::table('users')->where('id', $user_id)->update(['cover' => $filename]);
            return response()->json([
                'success' => true,
                'data' => [
                'image' => asset($path . '/' . $filename)
                ]
            ]);
        } catch (\Exception $e) {
            report($e);
            return response()->json([
                'success' => false,
                'data' => null
            ], 500);
        }
        //  untuk upload file, kemudian return lokasi url foto
    }

    public function perbedaan_timeset($perbedaan){

        $simpanbeda = array();
        for($i=0; $i < count($perbedaan[0]); $i++){
            if($perbedaan[0][$i]!=0){
                $simpanbeda[] = $perbedaan[0][$i]->format('d F Y');
            } else if($perbedaan[1][$i]!=0){
                $simpanbeda[] = $perbedaan[1][$i]." days ago";
            } else if($perbedaan[2][$i]!=0){
                $simpanbeda[] = $perbedaan[2][$i]." hours ago";
            } else if($perbedaan[3][$i]!=0){    
                $simpanbeda[] = $perbedaan[3][$i]." minutes ago";
            } else {
                $simpanbeda[] = $perbedaan[4][$i]." seconds ago";
            }
        };
        return $simpanbeda;
    }

}
