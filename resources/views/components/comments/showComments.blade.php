@if(!$comments->isEmpty())
    <div class="card-body">
        @foreach($comments as $comment)
            <p class="card-text"><b>{{$comment->user->name}} {{$comment->user->surname}}</b> {{$comment->body}}</p>
        @endforeach
    </div>
@endif