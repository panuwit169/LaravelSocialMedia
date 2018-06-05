<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function post(Request $request){
        $post = new Post;
        $post->owner_id = $request->id;
        $post->body = $request->posttext;
        $post->save();

        return back();
    }

    public function likes($id){
        $post = Post::find($id);
        $post->likes += 1;
        
        $post->save();
        return back();
    }

    public function DeletePost(Request $request){
        $id = $request->id;
        Post::find($id)->delete();

        return back();
    }
}
