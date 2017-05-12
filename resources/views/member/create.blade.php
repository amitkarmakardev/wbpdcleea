@extends('member.layout')

@section('sub-navigation')
    > <a href="{{ url('member', 'create') }}">Create Member</a>
@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">Create Member</h2>
        <div class="main-content">
            <hr>
            {!! Form::open(['url' => url('member')]) !!}

            @include('member.form')

            {!! Form::close() !!}
        </div>
    </div>
@stop