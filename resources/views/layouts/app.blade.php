<!DOCTYPE html>
<html>
<head>
    <title>Сайтсофт - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
@include('subviews/navbar')
<div class="row-fluid">
@yield('content')
</div>
</body>
</html>