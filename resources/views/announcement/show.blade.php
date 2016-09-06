@extends('announcement.layout')

@section('sub-navigation')
    > <a href="{{ url('announcement', [$data->id]) }}">{{ $data->subject }}</a>
@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">{{ $data->subject }}</h2>
        <div class="main-content">
            <hr>
            <div style="min-height: 300px">
                {{ $data->description }}
            </div>
            <hr>
            <h6 style="text-align: right; color: #555">Published by: {{ $data->published_by }}</h6>


        </div>
    </div>
    @include('comment.comment')

@stop