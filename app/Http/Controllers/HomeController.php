<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_post = Post::orderBy('created_at', 'desc')->get();
        return view('home',['posts' => $all_post]);
    }

    // public function log()
    // {
    //     $all_post = Post::all();
    //     return $all_post;
    // }
}
