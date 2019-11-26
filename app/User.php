<?php

namespace App;

use App\Traits\Friendable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use Friendable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug','gender','pic','cover',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post(){
        return $this->hasMany(Post::class);
    }
    public function user_to_comment(){
        return $this->hasMany(Comment::class,'user_id');
    }

    public function requster_to_friendships(){
        return $this->hasMany(Friendship::class, 'requester');
    }

    public function user_requested_to_friendships(){
        return $this->hasMany(Friendship::class, 'user_requested');
    }

    public function followers_to_friendsips()
    {
        return $this->hasMany(Friendship::class, 'id', 'requesters');
    }

    // public function showUser(){
    //     return $this->hasOne(User::class, '')
    // }
}
