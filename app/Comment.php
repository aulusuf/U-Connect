<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $table    ="comments";
    protected $primaryKey  = "id";
    public $timestamps = true;

    // protected $fillable = [
    //     'user_id','post_id', 'comment',
    // ];


    public function comment_from_user(){ //bisa disimpelkan dengan target tabel
        return $this->belongsTo(User::class, 'user_id','id'); //(class, 'foreign', 'references')
    }
    public function comment_from_post(){
        return $this->belongsTo(Post::class,'post_id','id');
    }

}
