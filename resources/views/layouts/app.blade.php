<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/boootstrap-4-css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" />
</head>
<body>

    @include('header')

    @yield('content')

    @include('footer')
</body>
<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('/js/jquery-3.4.1.js')}}"></script>
<script src="{{asset('/js/bootstrap-4-js/bootstrap.min.js')}}"></script>
</html>