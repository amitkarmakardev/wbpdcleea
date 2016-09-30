@extends('layout')

@section('navigation')
    <div class="container-fluid navigation-container">
        <div class="container navigation">
            <a href="{{ url('/') }}">Home</a> > <a
                    href="{{ url('error/404') }}">404</a>
        </div>
    </div>
@stop

@section('content')
    <div class=" container main-container">
        <h2 class="heading">Error: 404, Not Available</h2>
        <h4 class="heading">Requested resource doesn't exist</h4>
    </div>
@stop