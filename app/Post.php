<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comments;
use App\User;

class Post extends Model
{
    protected $table = 'posts';

    public function owner(){
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function comments(){
        return $this->hasMany(Comments::class, 'owner_post');
    }
}
