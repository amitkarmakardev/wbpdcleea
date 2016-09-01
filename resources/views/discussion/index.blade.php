@extends('discussion.layout')

@section('sub-navigation')

@stop

@section('left')
    <div class="main-container">
        <h2 class="heading">Discussions</h2>
        <div class="main-content">
            <hr>
            @foreach($data_list as $discussion)

                <div class="row">
                    <div class="col-md-1">
                        <span style="font-size: 2em; padding: 25px; color: #f17c27">{{ $discussion->id }} </span>
                    </div>
                    <div class="col-md-9" style="padding-left: 30px">
                        <a href="{{url('discussion', $discussion->id)}}"
                           style="font-size: 1.2em; color: #555; display: block; margin-bottom: 5px">{{ $discussion->subject }}</a>
                        <span style="font-size: .8em">
                            Published <span
                                    style="color: #2ca02c">{{ $discussion->updated_at->diffForHumans() }}</span> by
                            <span style="color: #2a88bd">{{ $discussion->published_by }}</span>
                        </span>
                    </div>
                    <div class="col-md-1" style="text-align: right">
                        <span style="color: #989898; font-size: 1.5em">{{$discussion->hit}}</span><br>
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