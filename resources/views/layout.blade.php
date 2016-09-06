@extends('app')

@section('layout')

<!-- Spinner -->
<div id="spinner">
    <i class="fa fa-spin fa-refresh" style="color: #333; font-size: 5em;"></i>
</div>

<body>

<!-- Menu Section -->
@include('menu')

<div class="jumbotron" style="margin: 0">
    <div class="container">
        <h2>WBPDCL Energy Engineers' Association (Welfare)</h2>
    </div>
</div>
<!-- Navigation -->
@yield('navigation')

<!-- Main Content -->
@yield('content')

</body>

<!-- Scripts -->
<script src="{{ asset('js/wbpdcleea.js') }}"></script>

@stop