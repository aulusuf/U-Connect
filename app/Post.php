<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table    ="posts";
    // protected $primaryKey  = 'id';
    protected $guarded = ['id'];

    public function post_from_user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function comment_to_post(){
        return $this->hasMany(Comment::class,'post_id');
    }
}
