@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            {{ Auth::user()->name }} {{ Auth::user()->surname }}
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Post
                </div>
                <div class="card-body">
                    <form action="/post/new" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <textarea class="form-control" name="posttext" placeholder="What do you think?" rows="3"></textarea>
                        </div>
                        <div class="form-group float-right">
                            <input type="submit" class="btn btn-success" value="post"/>
                        </div>
                    </form>
                </div>
            </div>
            @foreach($posts as $post)
            <div class="card" style="margin: 0.5rem 0;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-11">
                            <h5 class="card-title">{{$post->owner->name}} {{$post->owner->surname}}</h5>
                        </div>
                        <form class="col-md-1" action="/post/delete" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$post->id}}" />
                            <input type="hidden" name="_method" value="delete" />
                            <button type="submit" class="btn btn-sm btn-light">x</button>
                        </form>
                    </div>
                    <p class="card-text">{{$post->body}}</p>
                    <a href="/post/likes/{{$post->id}}">{{$post->likes}} Likes</a>
                    <form class="form-group row" action="/comment" method="post" style="margin: 0.5rem 0;">
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="comment" placeholder="Comment here…" />
                        </div>
                        <input type="hidden" name="post_id" value="{{$post->id}}" />
                        @csrf
                        <button type="submit" class="btn btn-success">comment</button>
                    </form>
                    @if(!$post->comments()->get()->isEmpty())
                    <div class="card-body">
                        @foreach($post->comments()->get() as $comment)
                            <p class="card-text"><b>{{$comment->posts->owner->name}} {{$comment->posts->owner->surname}}</b> {{$comment->body}}</p>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
