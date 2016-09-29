@foreach($data->comments as $comment)
    <div class="comment-box">
        <div class="row">
            <div class="col-md-6">
                <h5 style="margin-bottom: 20px; font-weight: 600">
                    {{ $comment->publishedBy->name }}
                    - <span style="color: #999">{{ $comment->created_at->diffForHumans() }}</span>
                    @if($comment->isProper())
                        <span style="color: green"> - Comment Shown</span>
                    @else
                        <span style="color: #b80000"> - Comment Hidden</span>
                    @endif
                </h5>
            </div>
            <div class="col-md-6" style="text-align: right">
                <a href="{{ url($comment->id, ['improper']) }}" style="color: red">Mark improper</a>
            </div>
        </div>

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