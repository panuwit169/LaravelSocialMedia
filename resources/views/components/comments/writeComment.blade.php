<form class="form-group row" action="/comment" method="post" style="margin: 0.5rem 0;">
    <div class="col-md-10">
        <input class="form-control" type="text" name="comment" placeholder="Comment here…" />
    </div>
    <input type="hidden" name="post_id" value="{{$post->id}}" />
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
    @csrf
    <button type="submit" class="btn btn-success">comment</button>
</form>