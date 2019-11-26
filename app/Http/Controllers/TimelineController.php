<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use App\Post;
use App\User;


class TimelineController extends Controller
{
    public function index(){
        $login = Auth::user()->id;
        $posts = Post::with(['post_from_user', 'comment_to_post','comment_to_post.comment_from_user'])->orderBy('created_at','desc')->get();
        // $comments = Comment::with('comment_from_post','comment_from_user','comment_from_post.post_from_user')->get();
        
        $simpantglpost = array();
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

        return view('timeline.index', compact('auth','posts','simpanbeda'));
    }

    private function perbedaan_timeset($perbedaan){

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

    // public function showComment($post){
    //     $comment = Comment::with('user')
    // }
}
