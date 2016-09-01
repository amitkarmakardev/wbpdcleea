<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WBPDCLEEA</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
            integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
            crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

    <!-- Application CSS -->
    <link rel="stylesheet" href="{{ asset('css/wbpdcleea.css') }}">

    <!-- SlideJS -->
    <script src="{{ asset('plugins/Slides-SlidesJS-3/jquery.slides.min.js') }}"></script>

    <!-- Unslider -->
    <script src="{{ asset('plugins/unslider-master/dist/js/unslider-min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/unslider-master/dist/css/unslider.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/unslider-master/dist/css/unslider-dots.css') }}">

    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote.min.js') }}"></script>
    <link href="{{ asset('plugins/summernote/summernote.css') }}">

    <!-- Bootbox -->
    <script src="{{ asset('plugins/bootbox/bootbox.min.js') }}"></script>

</head>

@yield('layout')

</html>