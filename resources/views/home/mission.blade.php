@extends('layout')

@section('navigation')
    <div class="container-fluid navigation-container">
        <div class="container navigation">
            <a href="{{ url('/') }}">Home</a> > <a href="{{ url('/our-mission') }}">Our Mission</a>
        </div>
    </div>
@stop


@section('content')
    <div class="container">
        <div class="row">
          <div class="main-container">
              <h2 class="heading">Our Mission</h2>
              <div class="main-content">
                  <hr>
                  <p>Page under construction</p>
                  <hr>
          </div>
        </div>
    </div>

@stop