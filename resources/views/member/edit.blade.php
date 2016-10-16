@extends('member.layout')

@section('sub-navigation')
    > <a href="{{ url('member', 'create') }}">Create Member</a>
@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">Update Member Details</h2>
        <div class="main-content">
            <hr>
            {!! Form::model($data, ['url' => url('member', [$data->id])]) !!}

            @include('member.form')

            {!! Form::close() !!}
        </div>
    </div>
@stop