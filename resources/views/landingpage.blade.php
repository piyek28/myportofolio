<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width user-scalable=no initial-scale=1.0 maximum-scale=1.0 minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--Link css--}}
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <title>Document</title>
</head>
<body>

@include('partial.navbar')
@include('partial.carousel')
@include('partial.content')
@include('partial.footer')


{{--Script js--}}
<script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/color-modes.js') }}"></script>
</body>
</html>
