@extends('layout')

@section('navigation')
    <div class="container-fluid navigation-container">
        <div class="container navigation">
            <a href="{{ url('/') }}">Home</a>
        </div>
    </div>
@stop


@section('content')
    <div class="container">
        <div class="row">
          <div class="main-container">
              <h2 class="heading">Home</h2>
              <div class="main-content">
                  <hr>
                  <p style="line-height: 1.8em">
                      Bakreswar Thermal Power Project, under The West Bengal Power Development Corporation Limited, is one of the most reliable and prestigious coal-fired power plants in West Bengal and in India as well. In two stages the total capacity of the plant is (05 X 210)MW. Funded by the Overseas Economic Co-Operation Fund(OECF) of Japan Govt. - subsequently costituted as Japan Bank for International Co-operation (JBIC) - this project is one of the first Fast Track projects to be successfully completed within scheduled time.
                  </p>
              </div>
          </div>
        </div>
    </div>

@stop