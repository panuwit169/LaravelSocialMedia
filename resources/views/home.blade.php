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
                        <div class="form-group">
                            <textarea class="form-control" name="post" rows="3"></textarea>
                        </div>
                        <div class="form-group float-right">
                            <input type="submit" class="btn btn-success" value="post"/>
                        </div>
                    </form>
                </div>
            </div>
            @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->owner->name}} {{$post->owner->surname}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                    <a href="/post/likes">{{$post->likes}} Likes</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
