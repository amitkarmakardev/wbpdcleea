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
                  <p style="line-height: 1.8em">
                      Our mission is:
                  </p>
                  <p>Zeene ke hai char din.... ho o o o o o</p>
                  <p>Baki hain bekar din .... ho o o o o o </p>
                  <p>Jaye jaye........</p>
                  <p>Jaye jaye........</p>
                  <p>Ekbar jo jaye......jawani fir na aaye</p>
                  <hr>
          </div>
        </div>
    </div>

@stop