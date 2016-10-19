@extends('member.layout')

@section('sub-navigation')
    > <a href="{{ url('member', $data->id) }}">{{ $data->name }}'s Profile > Change Password</a>
@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">Change Password</h2>
        <div class="main-content">
            @if($errors->has('message'))
                <span style="color: red; display: block; width: 100%; text-align: center">{{ $errors->get('message')[0] }}</span>
            @endif
            {!! Form::open(['method' => 'post', 'url' => url('member', ['change-password'])]) !!}

            <div class="form-group">
                {!! Form::label('current_password', 'Current Password') !!}
                @if($errors->has('current_password'))
                    @foreach($errors->get('current_password') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::password('current_password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('new_password', 'New Password') !!}
                @if($errors->has('new_password'))
                    @foreach($errors->get('new_password') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::password('new_password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('new_password_confirmation', 'Confirm Password') !!}
                @if($errors->has('new_password_confirmation'))
                    @foreach($errors->get('new_password_confirmation') as $error)
                        <span class="validation-error-text"> - {{ $error }} </span>
                    @endforeach
                @endif
                {!! Form::password('new_password_confirmation', ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop