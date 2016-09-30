@extends('discussion.layout')

@section('sub-navigation')
    > <a href="{{ url('discussion', [$data->id]) }}">{{ $data->subject }}</a>
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
            <h6 style="text-align: right; color: #555">Published by: {{ $data->publihed_by }}</h6>
        </div>
    </div>

    @if(auth()->user()->can('moderate', 'comment'))
        @include('comment.moderate-comment')
    @else
        @include('comment.comment')
    @endif

@stop