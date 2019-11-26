<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    protected $table = "friendships";
    protected $guarded = ['id'];

    public function requester_to_user(){
        return $this->belongsTo(User::class, 'requester');
    }

    public function followings(){
        return $this->belongsTo(User::class, 'user_requested');
    }

    public function user_requested_to_user(){
        return $this->belongsTo(User::class,'user_requested');
    }

    public function followers(){
        return $this->belongsTo(User::class,'requester');
    }

    public function friendshipState_table(){
        return $this->hasMany(FriendshipState::class , 'state');
    }

}
