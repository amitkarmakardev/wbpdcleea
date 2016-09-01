@extends('poll.layout')

@section('left')
    <div class="main-container">
        <h2 class="heading">Create Poll</h2>
        <div class="main-content">
            <hr>

            {!! Form::open(['method' => 'post', 'url' => url('poll')]) !!}

            @if($errors->has('agenda'))
                @foreach($errors->get('agenda') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('agenda', 'Agenda') !!}
                {!! Form::text('agenda', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('option1'))
                @foreach($errors->get('option1') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('option1', 'Option 1') !!}
                {!! Form::text('option1', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('option2'))
                @foreach($errors->get('option2') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('option2', 'Option 2') !!}
                {!! Form::text('option2', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('option3'))
                @foreach($errors->get('option3') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('option3', 'Option 3') !!}
                {!! Form::text('option3', null, ['class' => 'form-control']) !!}
            </div>

            @if($errors->has('option4'))
                @foreach($errors->get('option4') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('option4', 'Option 4') !!}
                {!! Form::text('option4', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::hidden('published_by', null) !!}

            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop