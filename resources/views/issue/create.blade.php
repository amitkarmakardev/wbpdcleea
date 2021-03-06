@extends('issue.layout')

@section('sub-navigation')
    > <a href="{{ url('issue', 'create') }}">Create</a>
@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">Create Issue</h2>
        <div class="main-content">
            <hr>
            {!! Form::open(['url' => url('issue')]) !!}
            <div class="form-group">
                {!! Form::label('subject', '*Subject') !!}
                @if($errors->has('subject'))
                    @foreach($errors->get('subject') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::text('subject', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', '*Description') !!}
                @if($errors->has('description'))
                    @foreach($errors->get('description') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::textarea('description', null, ['class' => 'form-control tiny-editor']) !!}
            </div>

            {!! Form::hidden('published_by') !!}

            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop