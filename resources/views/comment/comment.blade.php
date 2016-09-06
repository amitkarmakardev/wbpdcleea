@foreach($data->comments as $comment)
    <div class="comment-box">
        <h5 style="margin-bottom: 20px; font-weight: 600">{{ $comment->published_by }} - <span
                    style="color: #999">{{ $comment->created_at->diffForHumans() }}</span></h5>
        <div class="comment">
            {{ $comment->content }}
        </div>
    </div>
@endforeach

<div class="comment-box">

    {!! Form::open(['method' => 'post', 'url' => url('comment')]) !!}

    {!! Form::hidden('commentable_type', $module) !!}
    {!! Form::hidden('published_by', null) !!}
    {!! Form::hidden('commentable_id', $data->id) !!}

    <div class="form-group">
        {!! Form::label('content', 'Comment') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5']) !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>