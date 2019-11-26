<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Friendship;
use App\User;

class FriendshipController extends Controller
{
    // click button add -> get add/$id user_requested, state = 0 ->create
    public function follow($id){
        $add = Friendship::create([
            'requester'         => Auth::user()->id,
            'user_requested'    => $id
        ]);
        
        return back();

    }
    public function unfollow($id){
        $add = Friendship::where([
            'requester'         => Auth::user()->id,
            'user_requested'    => $id
        ])
        ->delete();
        
        return back();

    }
    // click friend request -> get waiting_requested/ ->return view
    public function waiting_requested(){

        // $waiting = Friendship::find($id);
        $user_auth = Auth::user()->id;
        $friendship = Friendship::with(['requester', 'user_requested'])
                    ->where('user_requested', $user_auth);

    }

    // click friend requesting ->get waiting_requester/ ->return view
    public function waiting_requester(){

    }

    // click accept -> accept/$id_friendship state = 1 ->update state = 1
    public function accept(){
        
    }




    public function searchFriend(){

        $user_id = Auth::user()->id;
        $allUser = User::where('id','!=',$user_id)->get();

        return view('friendship.search', compact('allUser'));
    }

    public function sendReqFriend($id){

        Auth::user()->addFriend($id);

        return back();

    }

    public function request_waiting(){

        $user_id    = Auth::user()->id;

        $waiting    = Friendship::with(['requesters','user_requested']) //with nama method
                    ->where('user_requested', $user_id) // cek id yang login
                    ->where('state', 0) // cek status
                    ->get();
                    
                    // dd($waiting);
        return view('friendship.waiting', with(['waiting' => $waiting])); //with waiting ini nanti untuk dideclare di view

        // $waiting -> 'waiting' -> ngisi $waiting di view

        // $waiting    = DB::table('friendships')
        //             ->rightJoin('users','users.id','=','friendships.requester')
        //             ->where('state', '=', 0)
        //             ->where('friendships.user_requested','=', $user_id)->get();

        // return view('friendship.waiting', compact('waiting'));
        
    }

    public function acceptFriend($id){
       
        $user_id = Auth::user()->id;

        $accept = Friendship::where('id', $id)->update(['state'=> 1]);

        return redirect()->route('reqWaiting');




    }




    //     $user_id = Auth::user()->id;

   
    //     if($checkrequest){
            
    //         $updateFriendship = DB::table('friendships')
    //         ->where('user_requested', $id)->where('requester', $user_id)
    //         ->update(['state' => 1]);

    //         echo('error anjingggg');
            
    //         if ($updateFriendship) {

    //             return back();
    //             // dd($updateFriendship);
    //         } 

    //     } else {

    //         echo('disini error');

    //     }
    // }

    

}
