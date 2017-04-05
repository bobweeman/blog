@if(!empty($article))
    @foreach($article->comments() as $comment)
        <div class="comment">
            <div >
                <p>
                    <span class="comment-user">{{$comment->user()->name()}}</span>
                    {{$comment->created_at->diffForHumans()}}
                </p>
            </div>

            <div class="comment-body">
                {{$comment->body}}
            </div>
        </div>


@endif