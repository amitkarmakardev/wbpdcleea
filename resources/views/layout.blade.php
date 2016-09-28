@extends('app')

@section('layout')

        <!-- Spinner -->
<div id="spinner">
    <i class="fa fa-spin fa-refresh" style="color: #333; font-size: 5em;"></i>
</div>

<body>
        <!-- Header -->
@include('header')

        <!-- Navigation -->
@yield('navigation')

        <!-- Main Content -->
@yield('content')

</body>

<!-- Scripts -->
<script src="{{ asset('js/wbpdcleea.js') }}"></script>

@stop