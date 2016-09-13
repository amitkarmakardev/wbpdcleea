@extends('app')

@section('layout')

<!-- Spinner -->
<div id="spinner">
    <i class="fa fa-spin fa-refresh" style="color: #333; font-size: 5em;"></i>
</div>

<body>

<!-- Menu Section -->
@include('menu')

<div style="margin: 0; width: 100%; height: 523px; background-blend-mode: overlay; background-image: url({{ asset('images/back.jpg') }}); display: flex; align-items: center">
    <div class="container" style="text-align: center; width: 50%; padding: 25px;">
        <h1 style="color: #ffffee; text-shadow: 0 1px 5px #282828; font-size: 5em;">Be the element of change</h1>
        <a href="#" class="btn btn-success btn-lg">Join Now</a>
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