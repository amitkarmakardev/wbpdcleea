@extends('layout')

@section('navigation')
    <div class="container-fluid navigation-container">
        <div class="container navigation">
            <a href="{{ url('/') }}">Home</a> > <a
                    href="{{ url('error/403') }}">403</a>
        </div>
    </div>
@stop

@section('content')
    <div class=" container main-container">
        <h2 class="heading">Error: 403, Forbidden</h2>
        <h4 class="heading">You are not authorised to view this page</h4>
    </div>
@stop