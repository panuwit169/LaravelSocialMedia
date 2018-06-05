<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class CommentController extends Controller
{
    public function CommentOnPost(Request $request){
        $comment = new Comments;
        $comment->owner_post = $request->post_id;
        $comment->owner_comment_id = $request->user_id;
        $comment->body = $request->comment;

        $comment->save();
        return back();
    }
}
