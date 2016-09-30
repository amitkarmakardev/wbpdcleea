@foreach($data->properComments() as $comment)
<div class="comment-box">
    <h5 style="margin-bottom: 20px; font-weight: 600">
        {{ $comment->publishedBy->name }}
        - <span style="color: #999">{{ $comment->created_at->diffForHumans() }}</span>
    </h5>
    <div class="comment">
        {{ $comment->content }}
    </div>
</div>
@endforeach

@if(auth()->check())
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
@else
<h5 style="text-align: center; margin-top: 25px">Please <a href="{{url('auth/login')}}">Log in</a> to comment</h5>
@endif