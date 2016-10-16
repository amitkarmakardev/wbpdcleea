<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WBPDCLEEA</title>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery-3.1.0.min.js') }}"></script>
    {{--<script src="https://code.jquery.com/jquery-3.1.0.min.js"
            integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
            crossorigin="anonymous"></script>
--}}
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}"/>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

    <!-- Optional theme -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">--}}

    <!-- Latest compiled and minified JavaScript -->
    <script src="plugins/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>--}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.4.0/css/font-awesome.min.css') }}">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">--}}

    <!-- Application CSS -->
    <link rel="stylesheet" href="{{ asset('css/wbpdcleea.css') }}">

    <!-- BootBox -->
    <script src="{{ asset('plugins/bootbox.min.js') }}"></script>

</head>

@yield('layout')

</html>