@extends('layout')

@section('navigation')
    <div class="container-fluid navigation-container">
        <div class="container navigation">
            <a href="{{ url('/') }}">Home</a> > <a href="{{ url('/committee') }}">Executive Committee</a>
        </div>
    </div>
@stop


@section('content')
    <div class="container">
        <div class="row">
            <div class="main-container">
                <h2 class="heading">Committee</h2>
                <div class="main-content">
                    <hr>
                </div>
            </div>
        </div>
    </div>
@stop