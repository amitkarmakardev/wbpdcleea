<div class="comment-box">
    {!! Form::open(['method' => 'post', 'url' => url('comment')]) !!}

    {!! Form::hidden('commentable_type', $module) !!}
    {!! Form::hidden('published_by', null) !!}
    {!! Form::hidden('commentable_id', $data->id) !!}

    <div class="form-group">
        <span class="validation-error-text" style="display: block; text-align: right">Please do not make any offensive or provoking comment</span>
        {!! Form::label('content', 'Comment') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5']) !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
</div>
@foreach($data->comments as $comment)
    <div class="comment-box">
        <div class="row">
            <div class="col-md-6">
                <h5 style="margin-bottom: 20px; font-weight: 600">
                    {{ $comment->publishedBy->name }}
                    - <span style="color: #999">{{ $comment->created_at->diffForHumans() }}</span>
                </h5>
            </div>
            <div class="col-md-6" style="text-align: right">
                @if($comment->isProper())
                    <a href="{{ url('comment', [$comment->id,'mark-improper']) }}" style="color: red; font-size: 0.8em">Mark
                        improper</a>
                @else
                    <a href="{{ url('comment', [$comment->id, 'mark-proper']) }}"
                       style="color: green; font-size: 0.8em">Mark proper</a>
                @endif
            </div>
        </div>

        <div class="comment {{ $comment->is_proper }}">
            {!! $comment->content !!}
        </div>
    </div>
@endforeach
