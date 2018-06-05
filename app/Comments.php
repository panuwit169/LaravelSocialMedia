<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    public function posts(){
        return $this->belongsTo(Post::class, 'owner_post');
    }

    public function user(){
        return $this->belongsTo(User::class, 'owner_comment_id');
    }
}
