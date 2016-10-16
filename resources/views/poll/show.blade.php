@extends('poll.layout')

@section('sub-navigation')
    > <a href="{{ url('poll', [$data->id]) }}">{{ $data->agenda }}</a>
@stop

@section('left')
    <div class="main-container">
        <h6 style="text-align: right; color: #555">Published by: {{ $data->published_by }}</h6>
        <h2 class="heading">{{ $data->agenda }}</h2>

        <div class="main-content">
            <hr>
            <ul style="list-style-type: none">
                @foreach($data->pollOptions as $poll_option)
                    <li style="margin-bottom: 30px"><h4>{{ $poll_option->option }}</h4></li>
                @endforeach
            </ul>

            <hr>
            @can('create', 'poll')
            <div style="text-align: right">
                @if($data->status == 'inactive')
                    <a href="{{ url('poll', [$data->id, 'activate']) }}" class="btn btn-primary" id="confirm">Activate
                        Poll</a>
                @else
                    <a href="{{ url('poll', [$data->id, 'deactivate']) }}" class="btn btn-danger" id="confirm">De-activate
                        Poll</a>
                @endif
            </div>
            @endcan

        </div>
    </div>
@stop