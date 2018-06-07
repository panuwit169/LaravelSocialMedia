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