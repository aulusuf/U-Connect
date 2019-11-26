<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendshipState extends Model

{
    protected $table = "friendship_states";
    protected $guarded = ['id'];

    public function friendship_table(){
        return $this->belongsTo(Friendship::class , 'state');
    }
}
