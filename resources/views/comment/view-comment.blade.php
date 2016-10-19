@if(auth()->check())
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
    <span style="text-align: right;display: inline-block; width: 100%; font-size: 0.9em; color: red">Please note: Offensive comments will be hidden</span>
    {!! Form::close() !!}
</div>
@else
<h5 style="text-align: center; margin-top: 25px">Please <a href="{{url('auth/login')}}">Log in</a> to comment</h5>
@endif

@foreach($data->properComments() as $comment)
    <div class="comment-box">
        <h5 style="margin-bottom: 20px; font-weight: 600">
            {{ $comment->publishedBy->name }}
            - <span style="color: #999">{{ $comment->created_at->diffForHumans() }}</span>
        </h5>
        <div class="comment">
            {!! $comment->content !!}
        </div>
    </div>
@endforeach