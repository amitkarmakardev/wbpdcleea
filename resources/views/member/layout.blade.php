@extends('layout')

@section('navigation')
    <div class="container-fluid navigation-container">
        <div class="container navigation">
            <a href="{{ url('/') }}">Home</a> > <a
                    href="{{ url('member') }}">Member</a> @yield('sub-navigation')
        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @yield('left')
            </div>
            <div class="col-md-3">
                @include('right')
            </div>
        </div>
    </div>
@stop