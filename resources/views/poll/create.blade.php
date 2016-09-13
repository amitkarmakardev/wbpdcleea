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

            @if($errors->has('option'))
                @foreach($errors->get('option') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('option', 'Option') !!}
                {!! Form::text('option[]', null, ['class' => 'form-control']) !!}
            </div>
            @if($errors->has('option'))
                @foreach($errors->get('option') as $error)
                    <span class="validation-error-text"> * {{ $error }} </span>&nbsp;&nbsp;
                @endforeach
            @endif
            <div class="form-group">
                {!! Form::label('option', 'Option') !!}
                {!! Form::text('option[]', null, ['class' => 'form-control']) !!}
            </div>

            <div id="extra-poll-options">

            </div>

            {!! Form::hidden('published_by', null) !!}

            <a href="#" class="btn btn-success" onclick="addPollOption()">Add Option</a>
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop