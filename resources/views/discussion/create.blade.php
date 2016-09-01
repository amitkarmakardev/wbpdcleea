@extends('discussion.layout')

@section('left')
    <div class="main-container">
        <h2 class="heading">Create Discussion</h2>
        <div class="main-content">
            <hr>
            {!! Form::open(['url' => url('discussion')]) !!}

            @if($errors->has('subject'))
                @foreach($errors->get('subject') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('subject', 'Subject') !!}
                {!! Form::text('subject', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('description'))
                @foreach($errors->get('description') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::hidden('published_by') !!}

            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop