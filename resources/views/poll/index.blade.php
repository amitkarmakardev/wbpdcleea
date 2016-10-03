@extends('poll.layout')

@section('sub-navigation')

@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">Polls</h2>
        <div class="main-content">
            <hr>
            @foreach($data_list as $poll)

                <div class="row">
                    <div class="col-md-1">
                        <span style="font-size: 2em; padding: 25px; color: #f17c27">{{ $poll->id }} </span>
                    </div>
                    <div class="col-md-9" style="padding-left: 30px">
                        <a href="{{url('poll', $poll->id)}}"
                           style="font-size: 1.2em; color: #555; display: block; margin-bottom: 5px">{{ $poll->agenda }}</a>
                        <span style="font-size: .8em">
                            Published
                            <span style="color: #2ca02c">{{ $poll->created_at->diffForHumans() }}</span> by
                            <a href="{{ url('member', $poll->publishedBy->id) }}"
                               style="color: #2a88bd">{{ $poll->publishedBy->name }}</a>
                        </span>
                    </div>
                    <div class="col-md-1" style="text-align: right">
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <hr>

            @endforeach
            <div style="text-align: center">
                {!! $data_list->render() !!}
            </div>
        </div>
    </div>
@stop