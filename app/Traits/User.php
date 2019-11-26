<?php

namespace App\Traits;

use App\Friendship;

trait Friendable {
    
    public function addFriend($id){

        $friendship = Friendship::create([
            
            'requester'         => $this->id,
            'user_requested'    => $id,

        ]);
        return back();
    }

}