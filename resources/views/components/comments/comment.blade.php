<div>
    @include('components.comments.writeComment')
    @include('components.comments.showComments', ['comments' => $post->comments()->get()])
</div>