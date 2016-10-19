@extends('issue.layout')

@section('sub-navigation')

@stop

@section('left')
    <div class="main-container">
        <h2 class="heading"><i class="fa fa-hourglass"></i> &nbsp;Issues</h2>
        <div class="main-content">
            <hr>
            @foreach($data_list as $issue)

                <div class="row">
                    <div class="col-md-1">
                        <span style="font-size: 2em; padding: 25px; color: #f17c27">{{ $issue->id }} </span>
                    </div>
                    <div class="col-md-9" style="padding-left: 30px">
                        <a href="{{url('issue', $issue->id)}}"
                           style="font-size: 1.2em; color: #555; display: block; margin-bottom: 5px">{{ $issue->subject }}</a>
                        <span style="font-size: .8em">
                            Published
                            <span style="color: #2ca02c">{{ $issue->updated_at->diffForHumans() }}</span> by
                            <a href="{{ url('member', $issue->publishedBy->id) }}"
                               style="color: #2a88bd">{{ $issue->publishedBy->name }}</a>
                        </span>
                    </div>
                    <div class="col-md-1" style="text-align: right">
                        <span style="color: #989898; font-size: 1.5em">{{$issue->status}}</span><br>
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