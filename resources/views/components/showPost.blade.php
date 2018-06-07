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
                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-light">x</button>
                </form>
            </div>
            <p class="card-text">{{$post->body}}</p>
            <a href="/post/likes/{{$post->id}}">{{$post->likes}} Likes</a>
            @include('components.comments.comment', ['post' => $post])
        </div>
    </div>
@endforeach